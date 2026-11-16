<?php
$current   = 'contact';
$pageTitle = 'Contact | Cabinet S.T & Associées — syndic à Nice';
$pageDesc  = 'Contactez le Cabinet S.T & Associées, syndic de copropriété à Nice : 15 boulevard de Cimiez, 04 97 03 85 17, contact@cabinetst.com. Rendez-vous du lundi au vendredi.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="index.html">Accueil</a> · Contact</p>
        <span class="eyebrow">Contact</span>
        <h1>Rencontrons-nous</h1>
        <p>Notre cabinet vous accueille au cœur de Nice. Écrivez-nous ou appelez-nous : nous vous répondons rapidement.</p>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div class="reveal">
            <span class="eyebrow">Nos coordonnées</span>
            <h2>Le Cabinet S.T &amp; Associées</h2>
            <p class="lead">Une question sur votre copropriété ou votre projet de changement de syndic ? N’hésitez pas à nous contacter.</p>

            <div class="grid" style="gap:1rem;margin-top:1.6rem">
                <a class="contact-card" href="https://www.google.com/maps/search/?api=1&query=<?= urlencode(MAP_QUERY) ?>" target="_blank" rel="noopener">
                    <span class="ico"><?= icon('map-pin', 22) ?></span>
                    <div>
                        <h3>Adresse</h3>
                        <p><?= ADDR_STREET ?><br><?= ADDR_CITY ?></p>
                    </div>
                </a>
                <a class="contact-card" href="tel:<?= PHONE_LINK ?>">
                    <span class="ico"><?= icon('phone', 22) ?></span>
                    <div>
                        <h3>Téléphone</h3>
                        <p><?= PHONE_DISPLAY ?></p>
                    </div>
                </a>
                <a class="contact-card" href="mailto:<?= EMAIL ?>">
                    <span class="ico"><?= icon('mail', 22) ?></span>
                    <div>
                        <h3>E-mail</h3>
                        <p><?= EMAIL ?></p>
                    </div>
                </a>
                <div class="contact-card">
                    <span class="ico"><?= icon('calendar', 22) ?></span>
                    <div>
                        <h3>Rendez-vous</h3>
                        <p><?= HOURS ?></p>
                    </div>
                </div>
                <div class="contact-card">
                    <span class="ico"><?= icon('building', 22) ?></span>
                    <div>
                        <h3>Accès</h3>
                        <p><?= TRANSPORT ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card reveal reveal-delay-1" style="padding:clamp(1.6rem,3vw,2.4rem)">
            <h2 style="font-size:clamp(1.3rem,2.2vw,1.6rem)">Nous écrire</h2>
            <p class="muted" style="margin-bottom:1.4rem">Les champs marqués d’un <span style="color:#c0392b">*</span> sont obligatoires.</p>

            <form class="form js-form" novalidate
                  data-mailto="<?= EMAIL ?>"
                  data-subject="Contact — Site du Cabinet S.T & Associées">
                <div class="form-row">
                    <div class="field">
                        <label for="c-nom">Nom <span class="req">*</span></label>
                        <input type="text" id="c-nom" name="nom" data-label="Nom" autocomplete="family-name" required>
                        <span class="error-msg"></span>
                    </div>
                    <div class="field">
                        <label for="c-prenom">Prénom</label>
                        <input type="text" id="c-prenom" name="prenom" data-label="Prénom" autocomplete="given-name">
                        <span class="error-msg"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="c-email">Adresse e-mail <span class="req">*</span></label>
                        <input type="email" id="c-email" name="email" data-label="E-mail" autocomplete="email" required>
                        <span class="error-msg"></span>
                    </div>
                    <div class="field">
                        <label for="c-tel">Téléphone</label>
                        <input type="tel" id="c-tel" name="telephone" data-label="Téléphone" autocomplete="tel">
                        <span class="error-msg"></span>
                    </div>
                </div>

                <div class="field">
                    <label for="c-message">Votre message <span class="req">*</span></label>
                    <textarea id="c-message" name="message" data-label="Message" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                    <span class="error-msg"></span>
                </div>

                <div class="field">
                    <label class="consent">
                        <input type="checkbox" name="consentement" data-label="Consentement" required>
                        <span>J’accepte que mes données soient utilisées pour être recontacté au sujet de ma demande. <span class="req">*</span></span>
                    </label>
                    <span class="error-msg"></span>
                </div>

                <div class="form-feedback" role="status" aria-live="polite"></div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">
                    Envoyer le message <?= icon('send', 18) ?>
                </button>

                <p class="form-note">
                    À l’envoi, votre message est préparé dans votre logiciel de messagerie puis adressé à
                    <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.
                </p>
            </form>
        </div>
    </div>
</section>

<!-- ======================= CARTE ======================= -->
<section class="section section--tint" style="padding-top:0">
    <div class="container">
        <div class="section-head section-head--center reveal" style="padding-top:var(--section-y)">
            <span class="eyebrow">Nous trouver</span>
            <h2>Localisation du cabinet</h2>
            <p class="lead"><?= ADDR_STREET ?>, <?= ADDR_CITY ?> — <?= TRANSPORT ?></p>
        </div>
        <div class="map-frame reveal">
            <iframe
                title="Carte de localisation du Cabinet S.T & Associées à Nice"
                src="https://www.google.com/maps?q=<?= urlencode(MAP_QUERY) ?>&output=embed"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
