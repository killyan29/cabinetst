<?php
$current   = 'mentions-legales';
$pageTitle = 'Mentions légales | Cabinet S.T & Associées';
$pageDesc  = 'Mentions légales du site du Cabinet S.T & Associées, syndic de copropriété à Nice.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="index.html">Accueil</a> · Mentions légales</p>
        <h1>Mentions légales</h1>
    </div>
</section>

<section class="section">
    <div class="container prose">
        <h2>Éditeur du site</h2>
        <p>
            <strong><?= SITE_NAME ?></strong><br>
            <?= ADDR_STREET ?><br>
            <?= ADDR_CITY ?><br>
            Téléphone : <a href="tel:<?= PHONE_LINK ?>"><?= PHONE_DISPLAY ?></a><br>
            E-mail : <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
        </p>
        <p>
            Activité : syndic de copropriété. Le cabinet est titulaire de la <?= CARD_PRO ?>
            et bénéficie de la <?= GUARANTEE ?>.
        </p>

        <h2>Responsable de la publication</h2>
        <p>Le Cabinet S.T &amp; Associées.</p>

        <h2>Hébergement</h2>
        <p>
            Le site est hébergé par un prestataire technique. Les coordonnées de l’hébergeur
            peuvent être obtenues auprès de l’éditeur, aux coordonnées indiquées ci-dessus.
        </p>

        <h2>Propriété intellectuelle</h2>
        <p>
            L’ensemble des contenus présents sur ce site (textes, logo, éléments graphiques, mise en page)
            est la propriété du <?= SITE_NAME ?>, sauf mention contraire. Toute reproduction,
            représentation ou diffusion, totale ou partielle, sans autorisation écrite préalable est interdite.
        </p>

        <h2>Responsabilité</h2>
        <p>
            Les informations diffusées sur ce site sont fournies à titre indicatif et peuvent évoluer.
            Le <?= SITE_NAME ?> ne saurait être tenu responsable d’une erreur ou d’une omission,
            ni de l’utilisation faite par un tiers de ces informations.
        </p>

        <h2>Liens externes</h2>
        <p>
            Ce site peut contenir des liens vers des sites tiers (espace client, réseaux sociaux, cartographie).
            Le <?= SITE_NAME ?> n’exerce aucun contrôle sur ces sites et décline toute responsabilité
            quant à leur contenu.
        </p>

        <h2>Données personnelles</h2>
        <p>
            Le traitement de vos données personnelles est décrit dans notre
            <a href="politique-confidentialite.php">politique de confidentialité</a>.
        </p>

        <p style="margin-top:2rem"><a class="btn btn-outline" href="contact.php">Nous contacter</a></p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
