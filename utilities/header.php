<?php

// Définit le domaine de base pour les pages
$domain = 'brief-med/';

// URL de la page d'accueil
$index_page = $domain;

// URL de la page des produits
$produits_page = $domain . 'produits.php';

// URL de la page de contact
$contact_page = $domain . 'contact.php';

// Obtient l'URL actuelle
$current_url = $_SERVER['SCRIPT_NAME'];

// Détermine le titre de la page en fonction de l'URL actuelle
switch(true) {
    case strpos($index_page, $current_url) || strpos($index_page . 'index.php', $current_url):
        // Titre pour la page d'accueil
        $title = 'La boutique santé de Wonderland Pharma';
        break;

    case strpos($produits_page, $current_url):
        // Titre pour la page des produits
        $title = 'Nos Produits santé Wonderland Pharma';
        break;

    case strpos($contact_page, $current_url):
        // Titre pour la page de contact
        $title = 'Contactez-nous';
        break;
}

// Fonction pour déterminer si une page est active
function isActive($current_url, $url) {
    if ($current_url == $url) {
        // Retourne 'active' si l'URL actuelle correspond à l'URL donnée
        return 'active';
    } else {
        // Retourne une chaîne vide dans le cas contraire
        return '';
    }
}

// var_dump(isActive($current_url, $index_page));
// var_dump('Current URL : ' . $current_url);
// var_dump('Page index: ' . $index_page);
// var_dump('Page produit : ' . $produits_page);
// var_dump('page contact : ' . $contact_page);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- CSS Custom -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <title><?php echo $title ?></title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($current_url, '/') ?> <?= isActive($current_url, '/index.php') ?>" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($current_url, '/produits.php') ?>" href="/produits.php">Nos produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isActive($current_url, '/contact.php') ?>" href="/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>