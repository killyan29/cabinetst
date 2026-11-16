<?php
$current   = 'devis';
$pageTitle = 'Demander un devis de syndic | Cabinet S.T & Associées — Nice';
$pageDesc  = 'Demandez votre devis de syndic de copropriété à Nice. Le Cabinet S.T & Associées vous répond avec une proposition claire et détaillée sous 24 heures.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="index.html">Accueil</a> · Demander un devis</p>
        <span class="eyebrow">Demander un devis</span>
        <h1>Obtenez votre devis de syndic en 24 heures</h1>
        <p>Transmettez-nous quelques informations sur votre copropriété : nous vous préparons une proposition claire, détaillée et sans engagement.</p>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div class="reveal">
            <span class="eyebrow">Votre projet</span>
            <h2>Une réponse rapide et personnalisée</h2>
            <p class="lead">
                Que vous soyez copropriétaire, membre du conseil syndical ou à la recherche d’un nouveau syndic,
                nous étudions votre situation et vous proposons une gestion adaptée à votre immeuble.
            </p>
            <ul class="check-list">
                <li><?= icon('check', 20) ?><span>Devis sous 24 heures</span></li>
                <li><?= icon('check', 20) ?><span>Sans engagement</span></li>
                <li><?= icon('check', 20) ?><span>Proposition claire et détaillée</span></li>
                <li><?= icon('check', 20) ?><span>Copropriétés de quelques lots à 300 logements</span></li>
            </ul>
            <div class="contact-card" style="margin-top:1.4rem">
                <span class="ico"><?= icon('phone', 22) ?></span>
                <div>
                    <h3>Vous préférez nous appeler ?</h3>
                    <p><a href="tel:<?= PHONE_LINK ?>"><?= PHONE_DISPLAY ?></a> — <?= HOURS ?></p>
                </div>
            </div>
        </div>

        <div class="card reveal reveal-delay-1" style="padding:clamp(1.6rem,3vw,2.4rem)">
            <h2 style="font-size:clamp(1.3rem,2.2vw,1.6rem)">Votre demande de devis</h2>
            <p class="muted" style="margin-bottom:1.4rem">Les champs marqués d’un <span class="req" style="color:#c0392b">*</span> sont obligatoires.</p>

            <form class="form js-form" novalidate
                  data-mailto="<?= EMAIL ?>"
                  data-subject="Demande de devis — Syndic de copropriété">
                <div class="form-row">
                    <div class="field">
                        <label for="nom">Nom <span class="req">*</span></label>
                        <input type="text" id="nom" name="nom" data-label="Nom" autocomplete="family-name" required>
                        <span class="error-msg"></span>
                    </div>
                    <div class="field">
                        <label for="prenom">Prénom <span class="req">*</span></label>
                        <input type="text" id="prenom" name="prenom" data-label="Prénom" autocomplete="given-name" required>
                        <span class="error-msg"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="email">Adresse e-mail <span class="req">*</span></label>
                        <input type="email" id="email" name="email" data-label="E-mail" autocomplete="email" required>
                        <span class="error-msg"></span>
                    </div>
                    <div class="field">
                        <label for="telephone">Téléphone <span class="req">*</span></label>
                        <input type="tel" id="telephone" name="telephone" data-label="Téléphone" autocomplete="tel" required>
                        <span class="error-msg"></span>
                    </div>
                </div>

                <div class="field">
                    <label for="adresse">Adresse de la copropriété <span class="req">*</span></label>
                    <input type="text" id="adresse" name="adresse" data-label="Adresse de la copropriété" placeholder="N°, rue, code postal, ville" required>
                    <span class="error-msg"></span>
                </div>

                <div class="field">
                    <label for="lots">Nombre de lots</label>
                    <input type="text" id="lots" name="lots" data-label="Nombre de lots" inputmode="numeric" placeholder="Ex. 42">
                    <span class="error-msg"></span>
                </div>

                <div class="field">
                    <label for="message">Message complémentaire <span class="req">*</span></label>
                    <textarea id="message" name="message" data-label="Message" placeholder="Décrivez brièvement votre copropriété et votre besoin…" required></textarea>
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
                    Envoyer ma demande <?= icon('send', 18) ?>
                </button>

                <p class="form-note">
                    À l’envoi, votre demande est préparée dans votre logiciel de messagerie puis adressée à
                    <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>. Vous pouvez également nous joindre directement
                    au <a href="tel:<?= PHONE_LINK ?>"><?= PHONE_DISPLAY ?></a>.
                </p>
            </form>
        </div>
    </div>
</section>

<!-- ======================= ÉTAPES ======================= -->
<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Comment ça marche</span>
            <h2>Trois étapes simples</h2>
        </div>
        <div class="steps">
            <div class="step reveal">
                <div>
                    <h3>Vous nous transmettez votre demande</h3>
                    <p>Renseignez le formulaire ou appelez-nous : quelques informations sur votre copropriété suffisent.</p>
                </div>
            </div>
            <div class="step reveal reveal-delay-1">
                <div>
                    <h3>Nous étudions votre copropriété</h3>
                    <p>Nous analysons vos besoins et définissons la gestion la plus adaptée à votre immeuble.</p>
                </div>
            </div>
            <div class="step reveal reveal-delay-2">
                <div>
                    <h3>Vous recevez votre devis sous 24 heures</h3>
                    <p>Une proposition claire et détaillée, sans engagement. Vous décidez sereinement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
