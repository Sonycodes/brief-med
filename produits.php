<?php include './utilities/header.php'; ?>

<div class="row row-cols-1 row-cols-md-3 m-auto justify-content-center ">
    <?php

    // Créer un tableau de données à afficher dans les cards
    $docteurs = array(
        array("titre" => "!Drink Me", "texte" => "Une potion qui vous fait rétrécir ou grandir selon la quantité que vous buvez. Attention à ne pas en abuser !", "image" => "drink_me.webp", "prix" => "9.99€"),
        array("titre" => "!Eat Me", "texte" => "Un gâteau qui vous fait changer de taille selon la part que vous mangez. Idéal pour explorer des endroits inaccessibles !", "image" => "eat_me.webp", "prix" => "12.99€"),
        array("titre" => "!Upelkuchen", "texte" => "Un biscuit qui vous fait changer de couleur selon la saveur que vous choisissez. Parfait pour vous camoufler ou vous amuser !", "image" => "upelkuchen.webp", "prix" => "14.99€"),
        array("titre" => "!Jabberwocky Blood", "texte" => "Un élixir qui vous donne des pouvoirs magiques pendant une courte durée. Utilisez-le avec prudence !", "image" => "jabberwocky_Blood.webp", "prix" => "19.99€"),
        array("titre" => "!Outlandish", "texte" => "Une pilule qui vous fait changer de personnalité selon l’humeur que vous souhaitez. Idéale pour vous évader ou vous surprendre !", "image" => "outlandish.webp", "prix" => "16.99€"),
        array("titre" => "!Rose me", "texte" => "Un médicament qui vous transforme en une rose rouge. Vous pouvez ainsi embellir le jardin de la Reine de cœur, mais attention à ne pas vous faire couper !", "image" => "rose_me.webp", "prix" => "11.99€"),
        array("titre" => "!Chess me", "texte" => "Un médicament qui vous fait entrer dans le jeu d’échecs vivant. Vous pouvez ainsi devenir un pion, un fou, une tour, un cavalier, un roi ou une reine, mais attention à ne pas vous faire échec et mat !", "image" => "chess_me.webp", "prix" => "6.99€"),
        array("titre" => "!Wonderland Tea", "texte" => "Un thé qui vous transporte dans le monde merveilleux d’Alice. Attention, vous ne contrôlez pas le temps ni le lieu de votre retour !", "image" => "wonderland_Tea.webp", "prix" => "24.99€")
    );

    // Créer une boucle for pour parcourir le tableau de données
    for ($i = 0; $i < count($docteurs); $i++) {
        // Récupérer les données de la card courante
        $titre = $docteurs[$i]["titre"];
        $texte = $docteurs[$i]["texte"];
        $image = $docteurs[$i]["image"];
        $prix = $docteurs[$i]["prix"];

        echo "
        <div class=\"card col text-center m-3 p-0 rounded-0\" style=\"width: 300px;\">
            <img src=\"./img/produits/$image\" class=\"card-img-top rounded-0\" alt=\"$titre\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">$titre</h5>
              <p class=\"card-text\">$texte</p>
              <p class=\"card-text\"><small class=\"text-muted\">Prix: $prix </small></p>
              <a href=\"#\" class=\"btn btn-primary rounded-0\">Acheter</a>
           </div>
          </div>
       ";
    }
    ?>
</div>

<?php include './utilities/footer.php'; ?>