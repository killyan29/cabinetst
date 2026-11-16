/* ==========================================================================
   Cabinet S.T & Associées — Script principal
   Navigation, animations au défilement, validation des formulaires
   ========================================================================== */
(function () {
    'use strict';

    /* ---------------------------------------------------------------------
       En-tête sticky
       --------------------------------------------------------------------- */
    var header = document.getElementById('siteHeader');
    var backToTop = document.getElementById('backToTop');

    function onScroll() {
        var y = window.scrollY || window.pageYOffset;
        if (header) header.classList.toggle('is-stuck', y > 12);
        if (backToTop) backToTop.classList.toggle('is-visible', y > 500);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    if (backToTop) {
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ---------------------------------------------------------------------
       Menu mobile (hamburger)
       --------------------------------------------------------------------- */
    var toggle = document.getElementById('navToggle');
    var nav = document.getElementById('mainNav');

    function closeNav() {
        if (!nav || !toggle) return;
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Ouvrir le menu');
        document.body.classList.remove('nav-open');
    }

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
            document.body.classList.toggle('nav-open', open);
        });

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeNav);
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeNav();
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 900) closeNav();
    });

    /* ---------------------------------------------------------------------
       Animations d'apparition au défilement
       --------------------------------------------------------------------- */
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

        revealEls.forEach(function (el) { observer.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---------------------------------------------------------------------
       Validation des formulaires
       Aucun backend n'est configuré : à la validation, le message est préparé
       puis transmis via le client de messagerie de l'utilisateur (mailto).
       --------------------------------------------------------------------- */
    var emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    var phoneRe = /^[+0-9 ().-]{8,20}$/;

    function setError(field, message) {
        var wrap = field.closest('.field');
        if (!wrap) return;
        wrap.classList.add('has-error');
        var msg = wrap.querySelector('.error-msg');
        if (msg) msg.textContent = message;
    }

    function clearError(field) {
        var wrap = field.closest('.field');
        if (wrap) wrap.classList.remove('has-error');
    }

    function validateForm(form) {
        var ok = true;
        var firstInvalid = null;

        form.querySelectorAll('input, select, textarea').forEach(function (field) {
            clearError(field);
            if (field.type === 'hidden' || field.disabled) return;

            var value = (field.value || '').trim();
            var label = field.getAttribute('data-label') || field.name || 'Ce champ';

            if (field.required && !value) {
                setError(field, label + ' est requis.');
                ok = false;
            } else if (field.type === 'email' && value && !emailRe.test(value)) {
                setError(field, 'Veuillez saisir une adresse e-mail valide.');
                ok = false;
            } else if (field.type === 'tel' && value && !phoneRe.test(value)) {
                setError(field, 'Veuillez saisir un numéro de téléphone valide.');
                ok = false;
            } else if (field.type === 'checkbox' && field.required && !field.checked) {
                setError(field, 'Merci de valider cette case pour continuer.');
                ok = false;
            }

            if (!ok && !firstInvalid && wrapIsError(field)) firstInvalid = field;
        });

        if (firstInvalid) firstInvalid.focus();
        return ok;
    }

    function wrapIsError(field) {
        var wrap = field.closest('.field');
        return wrap && wrap.classList.contains('has-error');
    }

    function buildMailto(form) {
        var to = form.getAttribute('data-mailto') || '';
        var subject = form.getAttribute('data-subject') || 'Nouvelle demande depuis le site';
        var lines = [];

        form.querySelectorAll('input, select, textarea').forEach(function (field) {
            if (field.type === 'hidden' || field.type === 'checkbox' || field.disabled) return;
            var value = (field.value || '').trim();
            if (!value) return;
            var label = field.getAttribute('data-label') || field.name || '';
            lines.push(label + ' : ' + value);
        });

        return 'mailto:' + to +
            '?subject=' + encodeURIComponent(subject) +
            '&body=' + encodeURIComponent(lines.join('\n'));
    }

    document.querySelectorAll('form.js-form').forEach(function (form) {
        // Efface l'erreur dès la correction
        form.querySelectorAll('input, select, textarea').forEach(function (field) {
            field.addEventListener('input', function () { clearError(field); });
            field.addEventListener('change', function () { clearError(field); });
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var feedback = form.querySelector('.form-feedback');

            if (!validateForm(form)) {
                if (feedback) {
                    feedback.className = 'form-feedback is-visible is-error';
                    feedback.textContent = 'Merci de corriger les champs indiqués avant d’envoyer votre demande.';
                }
                return;
            }

            // Ouverture du client mail avec le contenu pré-rempli
            window.location.href = buildMailto(form);

            if (feedback) {
                feedback.className = 'form-feedback is-visible is-success';
                feedback.textContent = 'Votre message a été préparé dans votre logiciel de messagerie. Vérifiez-le puis cliquez sur « Envoyer ». Vous pouvez aussi nous joindre directement par téléphone.';
            }
            form.reset();
        });
    });
})();
