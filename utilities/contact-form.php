<section>
    <h2>Contact Form</h2>
    <form action="" method="GET">
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label">Sujet</label>
            <input type="text" class="form-control" name="sujet" id="sujet">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label" name="message">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>

        <input type="submit" class="btn btn-primary">
    </form>

</section>
<?php
// Récupère la valeur du paramètre 'prenom', 'nom' ... dans l'URL
// En utilisant la superglobale $_GET pour récupérer les valeurs des paramètres spécifiés dans l’URL de la requête HTTP

// Vérifie si les clés 'prenom', 'nom', 'email', et 'sujet' existent dans $_GET avant d'y accéder
// https://www.php.net/manual/fr/function.isset.php
if ($prenom = isset($_GET['prenom'])) {
    $prenom = htmlspecialchars($_GET['prenom']);
} else {
    $prenom = null;
}

// Ternaire
$nom = isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : null;
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : null;
$sujet = isset($_GET['sujet']) ? htmlspecialchars($_GET['sujet']) : null;
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : null;

// Si on utilise ce code il affichera un warning
// $prenom = $_GET['prenom'];
// $nom = $_GET['nom'];
// $email = $_GET['email'];
// $sujet = $_GET['sujet'];
// $message = $_GET['message'];

// Vérification si les données saisies s'affichent
var_dump($prenom);
var_dump($nom);
var_dump($email);
var_dump($sujet);
var_dump($message);
?>