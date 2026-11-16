<?php
$current   = 'services';
$pageTitle = 'Nos services | Syndic de copropriété à Nice — Cabinet S.T & Associées';
$pageDesc  = 'Gestion comptable, sinistres, juridique, suivi technique des travaux et maîtrise des charges : découvrez tous les services du Cabinet S.T & Associées à Nice.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/data.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="index.html">Accueil</a> · Nos services</p>
        <span class="eyebrow">Nos services</span>
        <h1>Une gestion complète de votre copropriété</h1>
        <p>Du suivi comptable à la gestion des sinistres, du conseil juridique au suivi des travaux : nous assurons l’ensemble de la gestion de votre immeuble.</p>
    </div>
</section>

<!-- ======================= INTRO ======================= -->
<section class="section">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Notre savoir-faire</span>
            <h2>Des prestations assurées au sein du cabinet</h2>
            <p class="lead">
                Nous avons fait le choix de maîtriser en interne les compétences essentielles au bon
                fonctionnement d’une copropriété, afin de vous garantir réactivité, cohérence et qualité de service.
            </p>
        </div>
    </div>
</section>

<!-- ======================= SERVICES DÉTAILLÉS ======================= -->
<?php foreach ($services as $i => $s): ?>
<section id="<?= $s['slug'] ?>" class="section<?= $i % 2 === 1 ? ' section--tint' : '' ?>" style="padding-block:clamp(2.4rem,5vw,3.6rem)">
    <div class="container split<?= $i % 2 === 1 ? ' split--reverse' : '' ?>">
        <div class="reveal">
            <span class="eyebrow">Service du cabinet</span>
            <h2><?= $s['title'] ?></h2>
            <p class="lead"><?= $s['short'] ?></p>
            <p><?= $s['long'] ?></p>
            <ul class="check-list" style="margin-bottom:0">
                <?php foreach ($s['bullets'] as $b): ?>
                    <li><?= icon('check', 20) ?><span><?= $b ?></span></li>
                <?php endforeach; ?>
            </ul>
            <?php if (!empty($s['file'])): ?>
                <p style="margin-top:1.5rem;margin-bottom:0">
                    <a class="btn btn-outline" href="<?= $s['file']['url'] ?>" target="_blank" rel="noopener">
                        <?= icon('file-check', 18) ?> <?= $s['file']['label'] ?>
                    </a>
                </p>
            <?php endif; ?>
        </div>
        <div class="split__media reveal reveal-delay-1">
            <div class="service-visual">
                <img src="<?= $s['img'] ?>" alt="<?= $s['title'] ?> — Cabinet S.T &amp; Associées, syndic à Nice" loading="lazy">
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- ======================= CTA ======================= -->
<section class="section section--tint">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-band__inner">
                <div>
                    <h2>Un besoin précis ? Parlons-en.</h2>
                    <p>Décrivez-nous votre copropriété : nous vous indiquons comment nous pouvons vous accompagner et vous transmettons un devis sous 24 heures.</p>
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
