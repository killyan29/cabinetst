<?php
/**
 * Contenu éditorial commun (engagements & services).
 * Toutes les informations proviennent du site actuel du cabinet.
 */

$engagements = [
    [
        'icon'  => 'trending-down',
        'title' => 'Réduction des charges de copropriété',
        'text'  => 'Audit des charges et recherche systématique d’économies sur la gestion courante de votre copropriété.',
        'points'=> ['Audit complet des charges', 'Optimisation de la gestion courante'],
    ],
    [
        'icon'  => 'refresh',
        'title' => 'Renégociation annuelle des contrats',
        'text'  => 'Assurances, énergie, entretien… nous remettons vos contrats en concurrence chaque année pour optimiser le rapport qualité/prix.',
        'points'=> ['Mise en concurrence des contrats', 'Meilleur rapport qualité/prix'],
    ],
    [
        'icon'  => 'file-check',
        'title' => 'Devis compétitifs et transparents',
        'text'  => 'Des devis émanant d’entreprises qualifiées, présentés avec clarté et en toute transparence.',
        'points'=> ['Entreprises qualifiées', 'Clarté et transparence'],
    ],
    [
        'icon'  => 'scale',
        'title' => 'Accompagnement juridique performant',
        'text'  => 'Une formation et une expérience juridiques solides pour vous conseiller et vous défendre au quotidien.',
        'points'=> ['Formation juridique du cabinet', 'Expérience reconnue en la matière'],
    ],
    [
        'icon'  => 'clock',
        'title' => 'Disponibilité et réactivité',
        'text'  => 'Joignables directement par mail ou par téléphone, nous répondons rapidement à vos demandes.',
        'points'=> ['Joignables par mail et par téléphone', 'Réponses rapides'],
    ],
    [
        'icon'  => 'users',
        'title' => 'Accompagnement personnalisé',
        'text'  => 'Un interlocuteur dédié, à l’écoute de votre copropriété et de ses spécificités.',
        'points'=> ['Un interlocuteur dédié', 'À l’écoute des copropriétaires'],
    ],
];

/*
 * Les prestations réellement proposées par le cabinet (site actuel : rubrique « Nos services »).
 * Chaque service utilise l’icône d’origine du cabinet pour préserver l’identité visuelle.
 */
$services = [
    [
        'slug'  => 'sinistres',
        'title' => 'Gestion des sinistres',
        'short' => 'Une gestion rapide et efficace de vos dossiers, en relation constante avec les copropriétaires sinistrés.',
        'long'  => 'Nous nous chargeons de la déclaration et du suivi du dossier sinistre, représentons la copropriété lors des réunions d’expertise et vous accompagnons dans vos démarches. Depuis le 1ᵉʳ juin 2018, la convention IRSI s’applique aux sinistres dégâts des eaux et incendie.',
        'bullets' => [
            'Déclaration et suivi du dossier sinistre',
            'Représentation de la copropriété lors des expertises',
            'Accompagnement des copropriétaires sinistrés',
        ],
        'img'   => 'assets/img/icon-sinistre.png',
        'file'  => ['label' => 'Télécharger le constat amiable dégâts des eaux (PDF)', 'url' => CONSTAT_PDF],
    ],
    [
        'slug'  => 'comptable',
        'title' => 'Un service comptable',
        'short' => 'Des réponses claires à vos demandes.',
        'long'  => 'Nous assurons la tenue de la comptabilité de votre copropriété, l’établissement des budgets et des appels de fonds, ainsi qu’une restitution claire de vos comptes en assemblée générale. Chaque copropriétaire reçoit des réponses précises à ses questions.',
        'bullets' => [
            'Budgets prévisionnels et appels de fonds',
            'Comptabilité et reddition des comptes en AG',
            'Réponses claires à vos demandes',
        ],
        'img'   => 'assets/img/icon-comptabilite.png',
    ],
    [
        'slug'  => 'juridique',
        'title' => 'Un service juridique',
        'short' => 'Des conseils de qualité, assurés au sein même du cabinet.',
        'long'  => 'Le cabinet cultive une véritable expertise juridique : conseils aux copropriétaires et au conseil syndical, préparation et tenue des assemblées générales, rédaction et suivi du règlement de copropriété, gestion des questions de voisinage.',
        'bullets' => [
            'Conseils juridiques assurés au sein du cabinet',
            'Préparation et tenue des assemblées générales',
            'Suivi du règlement de copropriété',
        ],
        'img'   => 'assets/img/icon-juridique.png',
    ],
    [
        'slug'  => 'technique',
        'title' => 'Suivi technique des travaux',
        'short' => 'Un suivi rigoureux des travaux, aux côtés de tous les intervenants.',
        'long'  => 'Nous assurons le suivi des travaux en cours et organisons des réunions de chantier hebdomadaires avec l’ensemble des intervenants, afin de garantir le respect des délais et la qualité des ouvrages.',
        'bullets' => [
            'Consultation et sélection des entreprises',
            'Réunions de chantier hebdomadaires',
            'Suivi et réception des travaux',
        ],
        'img'   => 'assets/img/icon-technique.png',
    ],
    [
        'slug'  => 'disponibilite',
        'title' => 'Nos disponibilités',
        'short' => 'À votre écoute, et disponibles pour vous rencontrer rapidement sur votre copropriété.',
        'long'  => 'Notre disponibilité et notre réactivité sont notre force. Nous restons joignables directement par mail ou par téléphone et nous nous déplaçons rapidement sur votre copropriété.',
        'bullets' => [
            'Interlocuteur disponible et joignable',
            'Rendez-vous sur votre copropriété',
            'Relation de proximité avec les copropriétaires',
        ],
        'img'   => 'assets/img/icon-disponibilite.png',
    ],
];
