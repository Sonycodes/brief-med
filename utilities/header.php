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
switch (true) {
    case strpos($index_page, $current_url) || strpos($index_page . 'index.php', $current_url):
        // Titre pour la page d'accueil
        $title = 'La boutique santé de Wonderland Pharma';
        // Id pour le body de la page d'accueil'
        $bodyId = 'home';
        break;

    case strpos($produits_page, $current_url):
        // Titre pour la page des produits
        $title = 'Nos Produits santé Wonderland Pharma';
        // Id pour le body de la page des produits
        $bodyId = 'products';
        break;

    case strpos($contact_page, $current_url):
        // Titre pour la page de contact
        $title = 'Contactez-nous';
        // Id pour le body de la page contact
        $bodyId = 'contact';
        break;
};

$navlinks = [
    'accueil' => [
        'link_url' => '/',
        'link_url2' => '/index.php',
        'link_title' => 'Accueil',
    ],
    'produits' => [
        'link_url' => '/produits.php',
        'link_url2' => '',
        'link_title' => 'Produits',
    ],
    'contact' => [
        'link_url' => '/contact.php',
        'link_url2' => '',
        'link_title' => 'Contact',
    ]
];

// Fonction pour déterminer si une page est active
function isActive($current_url, $url, $url2)
{
    if ($current_url === $url) {
        // Retourne 'active' si l'URL actuelle correspond à l'URL donnée
        return 'active';
    } elseif ($current_url === $url2) {
        return 'active';
    } else {
        // Retourne une chaîne vide dans le cas contraire
        return 'false';
    }
};

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

<body id="<?php echo $bodyId ?>">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="../img/wonderland-pharma.png" alt="logo" class="w-25"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fs-3">
                        <?php
                        foreach ($navlinks as $key => $value) {
                            echo "<li class=\"nav-item\"><a class=\"nav-link " . isActive($current_url, $value['link_url'], $value['link_url2']) . "\"" . "href=\"" . $value['link_url'] . "\">" . $value['link_title'] . "</a></li>";
                        };
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>