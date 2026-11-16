<?php
$current   = 'politique-confidentialite';
$pageTitle = 'Politique de confidentialité | Cabinet S.T & Associées';
$pageDesc  = 'Politique de confidentialité du site du Cabinet S.T & Associées : traitement des données personnelles et droits des utilisateurs.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="index.html">Accueil</a> · Politique de confidentialité</p>
        <h1>Politique de confidentialité</h1>
    </div>
</section>

<section class="section">
    <div class="container prose">
        <p class="lead">
            Le <?= SITE_NAME ?> accorde une grande importance à la protection de vos données personnelles.
            Cette politique décrit les données que nous collectons via ce site et l’usage qui en est fait.
        </p>

        <h2>Responsable du traitement</h2>
        <p>
            <?= SITE_NAME ?>, <?= ADDR_FULL ?><br>
            E-mail : <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a> — Téléphone : <a href="tel:<?= PHONE_LINK ?>"><?= PHONE_DISPLAY ?></a>
        </p>

        <h2>Données collectées</h2>
        <p>
            Les formulaires de ce site (demande de devis et contact) collectent uniquement les données
            que vous choisissez de nous transmettre :
        </p>
        <ul>
            <li>nom et prénom ;</li>
            <li>adresse e-mail ;</li>
            <li>numéro de téléphone ;</li>
            <li>adresse de la copropriété et nombre de lots (le cas échéant) ;</li>
            <li>le contenu de votre message.</li>
        </ul>

        <h2>Finalité du traitement</h2>
        <p>
            Ces données sont utilisées dans le seul but de répondre à votre demande et de vous recontacter.
            Elles ne font l’objet d’aucune cession ni d’aucune revente à des tiers.
        </p>

        <h2>Durée de conservation</h2>
        <p>
            Vos données sont conservées le temps nécessaire au traitement de votre demande, puis archivées
            ou supprimées conformément aux obligations légales applicables.
        </p>

        <h2>Vos droits</h2>
        <p>
            Conformément au Règlement général sur la protection des données (RGPD), vous disposez d’un droit
            d’accès, de rectification, d’effacement, de limitation et d’opposition au traitement de vos données.
            Pour exercer ces droits, écrivez-nous à <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.
        </p>

        <h2>Cookies et services tiers</h2>
        <p>
            Ce site n’utilise pas de cookies publicitaires ni de traceurs à des fins de profilage.
            Certaines fonctionnalités s’appuient toutefois sur des services tiers susceptibles de
            déposer leurs propres cookies :
        </p>
        <ul>
            <li>la cartographie de localisation (Google Maps) sur la page contact ;</li>
            <li>le chargement des polices de caractères (Google Fonts).</li>
        </ul>
        <p>
            Vous pouvez configurer votre navigateur pour refuser les cookies. Le refus de ces services peut
            affecter l’affichage de certaines parties du site.
        </p>

        <h2>Sécurité</h2>
        <p>
            Nous mettons en œuvre des mesures raisonnables pour protéger vos données contre tout accès,
            toute modification ou toute divulgation non autorisés.
        </p>

        <p style="margin-top:2rem"><a class="btn btn-outline" href="contact.php">Une question ? Contactez-nous</a></p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
