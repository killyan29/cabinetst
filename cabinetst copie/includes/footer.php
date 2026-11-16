<?php
// Footer commun — inclus en fin de chaque page.
?>
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a class="footer-logo" href="index.php" aria-label="<?= SITE_NAME ?> — accueil">
                <img src="assets/img/logo.png" alt="Logo <?= SITE_NAME ?>" width="600" height="276" loading="lazy">
            </a>
            <p class="footer-text">
                Cabinet indépendant de syndic de copropriété à Nice. Une gestion transparente,
                de proximité et rigoureuse, pour les copropriétés de toutes tailles.
            </p>
            <a class="footer-social" href="<?= FACEBOOK_URL ?>" target="_blank" rel="noopener" aria-label="Facebook du Cabinet S.T & Associées">
                <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12Z"/></svg>
                <span>Facebook</span>
            </a>
        </div>

        <nav class="footer-col" aria-label="Navigation de pied de page">
            <h3>Navigation</h3>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="engagements.php">Nos engagements</a></li>
                <li><a href="services.php">Nos services</a></li>
                <li><a href="devis.php">Demander un devis</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="footer-col">
            <h3>Coordonnées</h3>
            <ul class="footer-contact">
                <li>
                    <span class="ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.05 7 13 7 13s7-7.95 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/></svg>
                    </span>
                    <span><?= ADDR_STREET ?><br><?= ADDR_CITY ?></span>
                </li>
                <li>
                    <span class="ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.3 1l-2.2 2.2Z"/></svg>
                    </span>
                    <a href="tel:<?= PHONE_LINK ?>"><?= PHONE_DISPLAY ?></a>
                </li>
                <li>
                    <span class="ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/></svg>
                    </span>
                    <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
                </li>
                <li>
                    <span class="ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm1 11h5v-2h-4V6h-2v7a1 1 0 0 0 1 1Z"/></svg>
                    </span>
                    <span><?= HOURS ?></span>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Espace client</h3>
            <p class="footer-text">
                Accédez à vos documents, à votre budget et réglez vos appels de fonds en ligne 24h/24.
            </p>
            <a class="btn btn-light" href="<?= ESPACE_CLIENT_URL ?>" target="_blank" rel="noopener">Accéder à mon espace</a>
        </div>
    </div>

    <div class="container footer-bottom">
        <p class="footer-legal">
            <a href="mentions-legales.php">Mentions légales</a>
            <span aria-hidden="true">·</span>
            <a href="politique-confidentialite.php">Politique de confidentialité</a>
        </p>
        <p class="footer-copy">© <?= YEAR ?> <?= SITE_NAME ?>. Tous droits réservés.</p>
    </div>
</footer>

<button class="back-to-top" id="backToTop" type="button" aria-label="Revenir en haut">
    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M12 8l-6 6 1.4 1.4L12 10.8l4.6 4.6L18 14z"/></svg>
</button>

<script src="assets/js/main.js" defer></script>
</body>
</html>
