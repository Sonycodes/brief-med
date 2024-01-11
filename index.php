<?php include './utilities/header.php'; ?>

<!-- Section Présentation titre + paragraphe -->
<section>
    <div class="container my-5">
        <h2 class="d-flex justify-content-center fs-1">Présentation :</h2>
        <p class="fs-22">Bienvenue au laboratoire pharmaceutique Wonderland Pharma, un établissement unique où la science et la magie se rencontrent pour créer des médicaments extraordinaires.
            Notre équipe dévouée de chercheurs et d'alchimistes travaille sans relâche pour développer des formulations révolutionnaires qui permettent à nos clients de changer de taille, de couleur,
            ou même d'acquérir des pouvoirs magiques. Inspiré par l'univers fantastique de Lewis Carroll, notre laboratoire est déterminé à repousser les limites de la réalité et à offrir des expériences
            pharmacologiques inédites. Que vous cherchiez à explorer de nouveaux horizons dimensionnels ou à embrasser votre côté fantastique, notre gamme de produits innovants est conçue pour émerveiller et surprendre.
            Rejoignez-nous dans cette aventure extraordinaire où la science et la magie convergent pour créer des solutions pharmaceutiques uniques au pays des rêves et de l'émerveillement.
        </p>
    </div>
</section>

<!-- Section Médecins titre + cards -->
<section>
    <div class="row row-cols-1 row-cols-md-2 m-auto justify-content-center ">
        <?php
        // Créer un tableau de données à afficher dans les cards
        $docteurs = array(
            array(
                "titre" => "Alice",
                "texte" => "Dr. Alice Kingsleigh, médecin renommée du pays des merveilles, apporte sa magie à la médecine moderne. Forte de son expérience dans des mondes fantastiques, elle assure la qualité des médicaments disponibles sur notre site. Sa combinaison unique de rigueur scientifique et de créativité offre des solutions novatrices pour le bien-être de tous. Faites confiance au Dr. Alice Kingsleigh pour des conseils médicaux exceptionnels au-delà de l'ordinaire. ",
                "image" => "alice-doctor.webp"
            ),
            array(
                "titre" => "Chapelier Fou",
                "texte" => "Le Chapelier Fou, expert excentrique en potions et remèdes du pays des merveilles, apporte une touche de folie à la médecine. Sa créativité débordante et sa compréhension unique des ingrédients inhabituels font de lui une figure clé dans le domaine pharmaceutique. En naviguant à travers des réalités fantaisistes, le Chapelier Fou propose des solutions médicales hors du commun pour favoriser le bien-être de chacun. Sa folie maîtrisée et son savoir atypique font de lui un allié surprenant et fiable dans la recherche de conseils médicaux singuliers et innovants. ",
                "image" => "madhatter-doctor.webp"
            ),
            array(
                "titre" => "La Chenille",
                "texte" => "La Chenille, experte énigmatique du pays des merveilles, offre une perspective unique en tant que conseillère médicale. Sa sagesse transcendantale et son approche contemplative se reflètent dans la sélection minutieuse des produits pharmaceutiques sur notre site. La Chenille, avec son regard perspicace et son penchant pour les remèdes naturels, incarne une approche holistique de la santé. Confiez-vous à la guidance exceptionnelle de la Chenille pour des conseils médicaux uniques et apaisants. ",
                "image" => "caterpillar-doctor.webp"
            ),
            array(
                "titre" => "Tweedledum et Tweedledee",
                "texte" => "Tweedledum et Tweedledee, experts du bien-être au pays des merveilles, ajoutent une touche ludique à la médecine. Ces jumeaux énergiques apportent une perspective unique, mêlant fantaisie et soins de santé. Leurs conseils, bien que farfelus, sont empreints d'une jovialité contagieuse. En tant que figures clés sur notre site de vente de médicaments, Tweedledum et Tweedledee incarnent l'harmonie entre la santé et la joie. Optez pour leur approche décalée pour une expérience médicale inédite et réjouissante.",
                "image" => "twins-doctor.webp"
            ),
        );

        // Créer une boucle for pour parcourir le tableau de données
        for ($i = 0; $i < count($docteurs); $i++) {
            // Récupérer les données de la card courante
            $titre = $docteurs[$i]["titre"];
            $texte = $docteurs[$i]["texte"];
            $image = $docteurs[$i]["image"];

            // echo du code html de base pour les cards
            echo "
        <div class=\"card col-6 text-center m-3 p-0 rounded-0\" style=\"width: 300px;\">
            <img src=\"/img/docteurs/$image\" class=\"card-img-top rounded-0\" alt=\"$titre\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">$titre</h5>
              <p class=\"card-text\">$texte</p>
           </div>
          </div>
       ";
        }

        ?>
</section>
<?php include './utilities/footer.php'; ?>