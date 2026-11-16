<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/icons.php';

$current = $current ?? '';

$navItems = [
    'accueil'    => ['label' => 'Accueil',          'href' => 'index.php'],
    'engagements'=> ['label' => 'Nos engagements',  'href' => 'engagements.php'],
    'services'   => ['label' => 'Nos services',     'href' => 'services.php'],
    'contact'    => ['label' => 'Contact',          'href' => 'contact.php'],
];

$pageTitle = $pageTitle ?? (SITE_NAME . ' — ' . SITE_TAGLINE);
$pageDesc  = $pageDesc  ?? 'Cabinet S.T & Associées, syndic de copropriété à Nice. Gestion transparente, maîtrise des charges, accompagnement juridique et proximité pour votre copropriété.';
$pageImage = $pageImage ?? 'assets/img/logo.png';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= SITE_URL ?>/<?= $current === 'accueil' ? '' : ($current . '.php') ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= SITE_NAME ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="<?= SITE_URL ?>/">
    <meta property="og:image" content="<?= SITE_URL ?>/<?= $pageImage ?>">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">

    <!-- Polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://static.wixstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Données structurées (SEO local) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "RealEstateAgent",
      "name": "<?= SITE_NAME ?>",
      "description": "Syndic de copropriété à Nice. Gestion transparente et de proximité pour les copropriétés de toutes tailles.",
      "url": "<?= SITE_URL ?>",
      "telephone": "<?= PHONE_LINK ?>",
      "email": "<?= EMAIL ?>",
      "image": "<?= SITE_URL ?>/assets/img/logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "15 boulevard de Cimiez",
        "postalCode": "06000",
        "addressLocality": "Nice",
        "addressRegion": "Provence-Alpes-Côte d'Azur",
        "addressCountry": "FR"
      },
      "areaServed": ["Nice", "Alpes-Maritimes"],
      "openingHours": "Mo-Fr 09:00-18:00"
    }
    </script>
</head>
<body class="page-<?= htmlspecialchars($current) ?>">

<a class="skip-link" href="#main">Aller au contenu principal</a>

<header class="site-header" id="siteHeader">
    <div class="container header-inner">
        <a class="brand" href="index.php" aria-label="<?= SITE_NAME ?> — accueil">
            <img src="assets/img/logo.png" alt="Logo <?= SITE_NAME ?>" width="600" height="276">
        </a>

        <nav class="main-nav" id="mainNav" aria-label="Navigation principale">
            <ul class="nav-list">
                <?php foreach ($navItems as $key => $item): ?>
                    <li>
                        <a href="<?= $item['href'] ?>"<?= $current === $key ? ' class="is-active" aria-current="page"' : '' ?>>
                            <?= $item['label'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="btn btn-primary btn-block nav-mobile-cta" href="devis.php">Demander un devis</a>
            <a class="btn btn-outline btn-block nav-mobile-cta" href="<?= ESPACE_CLIENT_URL ?>" target="_blank" rel="noopener">Espace client</a>
        </nav>

        <div class="header-actions">
            <a class="btn btn-outline btn-sm" href="<?= ESPACE_CLIENT_URL ?>" target="_blank" rel="noopener">Espace client</a>
            <a class="btn btn-primary btn-sm" href="devis.php">Demander un devis</a>
        </div>

        <button class="nav-toggle" id="navToggle" type="button"
                aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mainNav">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<main id="main">
