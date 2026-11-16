<?php
$current   = 'accueil';
$pageTitle = 'Syndic de copropriété à Nice | Cabinet S.T & Associées';
$pageDesc  = 'Cabinet S.T & Associées, syndic de copropriété à Nice. Gestion transparente, maîtrise des charges, accompagnement juridique et proximité pour votre copropriété. Devis sous 24 h.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/data.php';
?>

<!-- ======================= HERO ======================= -->
<section class="hero">
    <div class="container hero-inner">
        <span class="eyebrow">Syndic de copropriété à Nice</span>
        <h1>Votre copropriété mérite une gestion à la hauteur de vos attentes.</h1>
        <p class="hero-lead">
            Cabinet indépendant de syndic de copropriété à Nice, nous mettons notre exigence,
            notre expertise juridique et notre proximité au service de votre immeuble.
        </p>
        <div class="hero-actions">
            <a class="btn btn-light btn-lg" href="devis.php">Demander un devis</a>
            <a class="btn btn-ghost-light btn-lg" href="engagements.php">Découvrir nos engagements</a>
        </div>
        <div class="hero-badges">
            <div class="hero-badge">
                <strong>24 h</strong>
                <span>pour votre devis de syndic</span>
            </div>
            <div class="hero-badge">
                <strong>De 5 à 300 lots</strong>
                <span>copropriétés de toutes tailles</span>
            </div>
            <div class="hero-badge">
                <strong>Nice</strong>
                <span>&amp; Alpes-Maritimes</span>
            </div>
        </div>
    </div>
</section>

<!-- ======================= BANDEAU DE CONFIANCE ======================= -->
<div class="trustbar">
    <div class="container">
        <span><?= icon('shield-check', 18) ?> <?= GUARANTEE ?></span>
        <span><?= icon('file-check', 18) ?> Carte professionnelle syndic de copropriété</span>
        <span><?= icon('building', 18) ?> Copropriétés de quelques lots à 300 logements</span>
    </div>
</div>

<!-- ======================= PRÉSENTATION ======================= -->
<section class="section">
    <div class="container split">
        <div class="reveal">
            <span class="eyebrow">Le cabinet</span>
            <h2>Un cabinet indépendant, proche de vous</h2>
            <p class="lead">
                Le Cabinet S.T &amp; Associées est né de l’association de deux femmes, professionnelles
                de la gestion de copropriété, qui ont choisi ce métier pour apporter du renouveau à la profession.
            </p>
            <p>
                Cabinet indépendant dont l’intégralité des parts sociales est détenue par ses deux associées,
                il est le gage d’une gestion en toute transparence, dans le respect du devoir de probité.
                Nous maîtrisons parfaitement la gestion des copropriétés de toutes tailles, de quelques lots
                à 300 logements.
            </p>
            <ul class="check-list">
                <li><?= icon('check', 20) ?><span>Gestion transparente &amp; devoir de probité</span></li>
                <li><?= icon('check', 20) ?><span>Expertise juridique reconnue</span></li>
                <li><?= icon('check', 20) ?><span>Disponibilité et réactivité au quotidien</span></li>
            </ul>
            <a class="btn btn-primary" href="contact.php">Nous rencontrer</a>
        </div>
        <div class="split__media reveal reveal-delay-1">
            <img src="assets/img/cabinet.jpg"
                 alt="Le Cabinet S.T &amp; Associées, syndic de copropriété à Nice" loading="lazy">
            <div class="split__badge">
                <strong>Transparence</strong>
                <span>Une gestion indépendante et sans conflit d’intérêts</span>
            </div>
        </div>
    </div>
</section>

<!-- ======================= ENGAGEMENTS ======================= -->
<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Nos engagements</span>
            <h2>Nous nous engageons pour votre copropriété</h2>
            <p class="lead">Nous sommes convaincus que votre bien mérite notre respect. C’est pourquoi nous nous engageons, concrètement.</p>
        </div>
        <div class="grid grid-3">
            <?php foreach ($engagements as $i => $e): ?>
                <article class="card reveal reveal-delay-<?= ($i % 3) + 1 ?>">
                    <div class="icon-badge"><?= icon($e['icon']) ?></div>
                    <h3><?= $e['title'] ?></h3>
                    <p class="muted"><?= $e['text'] ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center;margin-top:2.4rem" class="reveal">
            <a class="btn btn-primary" href="engagements.php">En savoir plus sur nos engagements</a>
        </div>
    </div>
</section>

<!-- ======================= SERVICES ======================= -->
<section class="section">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Nos services</span>
            <h2>Des prestations complètes pour votre immeuble</h2>
            <p class="lead">Comptabilité, sinistres, juridique, technique : nous prenons en charge la gestion de votre copropriété de bout en bout.</p>
        </div>
        <div class="grid grid-3">
            <?php foreach ($services as $i => $s): ?>
                <a class="card media-card reveal reveal-delay-<?= ($i % 3) + 1 ?>" href="services.php#<?= $s['slug'] ?>">
                    <div class="media-card__visual">
                        <img src="<?= $s['img'] ?>" alt="<?= $s['title'] ?> — Cabinet S.T &amp; Associées à Nice" loading="lazy">
                    </div>
                    <div class="media-card__body">
                        <h3><?= $s['title'] ?></h3>
                        <p class="muted"><?= $s['short'] ?></p>
                        <span class="card-link">En savoir plus <?= icon('arrow-right', 16) ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
            <article class="card cta-tile reveal reveal-delay-3">
                <h3>Parlons de votre copropriété</h3>
                <p class="muted">Un projet, un changement de syndic ou une simple question ? Nous vous répondons rapidement.</p>
                <a class="btn btn-light" href="devis.php">Demander un devis</a>
            </article>
        </div>
        <div style="text-align:center;margin-top:2.4rem" class="reveal">
            <a class="btn btn-outline" href="services.php">Voir tous nos services <?= icon('arrow-right', 18) ?></a>
        </div>
    </div>
</section>

<!-- ======================= CHIFFRES CLÉS / FAITS ======================= -->
<section class="section section--soft">
    <div class="container">
        <div class="split split--reverse">
            <div class="reveal">
                <span class="eyebrow">Pourquoi nous choisir</span>
                <h2>Sérieux, disponibilité et proximité</h2>
                <p>
                    Notre disponibilité et notre réactivité sont notre force ; notre formation juridique
                    et notre expérience sont nos atouts ; notre dynamisme et notre sérieux sont notre signature.
                </p>
                <p>
                    Le cabinet est titulaire de la <?= CARD_PRO ?>, ainsi que de la <?= GUARANTEE ?>,
                    gage de sérieux et de sécurité pour nos clients.
                </p>
                <a class="btn btn-primary" href="devis.php">Demander un devis</a>
            </div>
            <div class="grid grid-2 reveal reveal-delay-1">
                <div class="card stat">
                    <strong>5 → 300</strong>
                    <span>lots gérés par copropriété</span>
                </div>
                <div class="card stat">
                    <strong>24 h</strong>
                    <span>pour obtenir votre devis</span>
                </div>
                <div class="card stat">
                    <strong>AXA France</strong>
                    <span>garantie financière</span>
                </div>
                <div class="card stat">
                    <strong>Nice</strong>
                    <span>&amp; Alpes-Maritimes</span>
                </div>
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
                    <h2>Obtenez votre devis de syndic en 24 heures</h2>
                    <p>Transmettez-nous les informations de votre copropriété : nous revenons vers vous rapidement avec une proposition claire et détaillée.</p>
                </div>
                <div class="cta-actions">
                    <a class="btn btn-light btn-lg" href="devis.php">Demander un devis</a>
                    <a class="btn btn-ghost-light btn-lg" href="tel:<?= PHONE_LINK ?>"><?= PHONE_DISPLAY ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= CONTACT ======================= -->
<section class="section section--tint">
    <div class="container">
        <div class="section-head section-head--center reveal">
            <span class="eyebrow">Contact</span>
            <h2>Parlons de votre copropriété</h2>
            <p class="lead">Notre cabinet vous accueille à Nice, du lundi au vendredi, sur rendez-vous.</p>
        </div>
        <div class="grid grid-3">
            <a class="contact-card reveal" href="https://www.google.com/maps/search/?api=1&query=<?= urlencode(MAP_QUERY) ?>" target="_blank" rel="noopener">
                <span class="ico"><?= icon('map-pin', 22) ?></span>
                <div>
                    <h3>Adresse</h3>
                    <p><?= ADDR_STREET ?><br><?= ADDR_CITY ?></p>
                </div>
            </a>
            <a class="contact-card reveal reveal-delay-1" href="tel:<?= PHONE_LINK ?>">
                <span class="ico"><?= icon('phone', 22) ?></span>
                <div>
                    <h3>Téléphone</h3>
                    <p><?= PHONE_DISPLAY ?></p>
                </div>
            </a>
            <a class="contact-card reveal reveal-delay-2" href="mailto:<?= EMAIL ?>">
                <span class="ico"><?= icon('mail', 22) ?></span>
                <div>
                    <h3>E-mail</h3>
                    <p><?= EMAIL ?></p>
                </div>
            </a>
        </div>
        <div style="text-align:center;margin-top:2.4rem" class="reveal">
            <a class="btn btn-outline" href="contact.php">Accéder à la page contact <?= icon('arrow-right', 18) ?></a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
