<?php
$current   = 'engagements';
$pageTitle = 'Nos engagements | Cabinet S.T & Associées — syndic à Nice';
$pageDesc  = 'Découvrez les engagements du Cabinet S.T & Associées, syndic de copropriété à Nice : maîtrise des charges, transparence, accompagnement juridique, disponibilité et proximité.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/data.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="index.html">Accueil</a> · Nos engagements</p>
        <span class="eyebrow">Nos engagements</span>
        <h1>Travailler ensemble pour réussir</h1>
        <p>Nous sommes convaincus que votre bien immobilier mérite notre respect. C’est pourquoi nous nous engageons, concrètement et durablement, à vos côtés.</p>
    </div>
</section>

<!-- ======================= PHILOSOPHIE ======================= -->
<section class="section">
    <div class="container split">
        <div class="reveal">
            <span class="eyebrow">Notre philosophie</span>
            <h2>Une gestion transparente et de proximité</h2>
            <p class="lead">
                Le Cabinet S.T &amp; Associées est un cabinet indépendant : l’intégralité de ses parts sociales
                est détenue par ses deux associées. C’est le gage d’une gestion en toute transparence,
                dans le respect du devoir de probité.
            </p>
            <p>
                Nous avons choisi ce métier par conviction, pour apporter du renouveau à la profession de syndic
                et replacer la relation humaine et l’écoute au cœur de la gestion de copropriété.
            </p>
            <ul class="check-list">
                <li><?= icon('check', 20) ?><span>Le respect de votre bien et de vos intérêts</span></li>
                <li><?= icon('check', 20) ?><span>Une communication claire et régulière</span></li>
                <li><?= icon('check', 20) ?><span>Un cabinet à taille humaine, réactif et disponible</span></li>
            </ul>
        </div>
        <div class="split__media reveal reveal-delay-1">
            <img src="assets/img/engagements.jpg"
                 alt="Immeuble de copropriété géré par le Cabinet S.T &amp; Associées à Nice" loading="lazy">
            <div class="split__badge">
                <strong>Indépendant</strong>
                <span>Un cabinet détenu par ses deux associées</span>
            </div>
        </div>
    </div>
</section>

<!-- ======================= LES 6 ENGAGEMENTS ======================= -->
<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Ce à quoi nous nous engageons</span>
            <h2>Six engagements concrets pour votre copropriété</h2>
        </div>
        <div class="grid grid-3">
            <?php foreach ($engagements as $i => $e): ?>
                <article class="card reveal reveal-delay-<?= ($i % 3) + 1 ?>">
                    <div class="icon-badge"><?= icon($e['icon']) ?></div>
                    <h3><?= $e['title'] ?></h3>
                    <p class="muted"><?= $e['text'] ?></p>
                    <ul class="check-list" style="margin-bottom:0">
                        <?php foreach ($e['points'] as $p): ?>
                            <li><?= icon('check', 18) ?><span><?= $p ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ======================= NOS ATOUTS ======================= -->
<section class="section">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Notre signature</span>
            <h2>Nos atouts au service de votre copropriété</h2>
        </div>
        <div class="grid grid-3">
            <div class="card reveal">
                <div class="icon-badge"><?= icon('clock') ?></div>
                <h3>Disponibilité &amp; réactivité</h3>
                <p class="muted">Notre disponibilité et notre réactivité sont notre force. Nous répondons rapidement et restons joignables par mail ou par téléphone.</p>
            </div>
            <div class="card reveal reveal-delay-1">
                <div class="icon-badge"><?= icon('scale') ?></div>
                <h3>Formation &amp; expérience</h3>
                <p class="muted">Notre formation juridique et notre expérience en la matière sont nos atouts pour vous conseiller et vous accompagner.</p>
            </div>
            <div class="card reveal reveal-delay-2">
                <div class="icon-badge"><?= icon('award') ?></div>
                <h3>Dynamisme &amp; sérieux</h3>
                <p class="muted">Notre dynamisme et notre sérieux sont notre signature : une gestion rigoureuse, tournée vers vos intérêts.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======================= SÉCURITÉ / PROFESSIONNALISME ======================= -->
<section class="section section--soft">
    <div class="container split split--reverse">
        <div class="reveal">
            <span class="eyebrow">Sécurité &amp; professionnalisme</span>
            <h2>Un cadre professionnel et sécurisé</h2>
            <p>
                Le cabinet est titulaire de la <?= CARD_PRO ?>.
            </p>
            <p>
                Il bénéficie également de la <?= GUARANTEE ?>, gage de sérieux et de sécurité totale
                pour nos clients.
            </p>
            <a class="btn btn-primary" href="devis.php">Demander un devis</a>
        </div>
        <div class="grid grid-2 reveal reveal-delay-1">
            <div class="card">
                <div class="icon-badge"><?= icon('file-check') ?></div>
                <h3>Carte professionnelle</h3>
                <p class="muted">Mention « syndic de copropriété ».</p>
            </div>
            <div class="card">
                <div class="icon-badge"><?= icon('shield-check') ?></div>
                <h3>Garantie financière</h3>
                <p class="muted">Assurée par AXA France, avec audit annuel.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======================= CTA ======================= -->
<section class="section">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-band__inner">
                <div>
                    <h2>Envie de changer de syndic ?</h2>
                    <p>Parlons de votre copropriété et de nos engagements. Nous vous préparons un devis clair sous 24 heures.</p>
                </div>
                <div class="cta-actions">
                    <a class="btn btn-light btn-lg" href="devis.php">Demander un devis</a>
                    <a class="btn btn-ghost-light btn-lg" href="contact.php">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
