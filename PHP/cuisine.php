<?php
    $container_electricite = "style='display: none'";
    $container_eau = "style='display: none'";

    if(isset($_GET['container_elec'])) {
        $container_electricite = "style='display: block'";
    }

    if(isset($_GET['container_eau'])) {
        $container_eau = "style='display: block'";
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/0fa7bf339b.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/cuisine.css">
    <link rel="stylesheet" href="../CSS_TABLETTE/cuisine_tablette.css">
    <title>Cuisine</title>
</head>
<body>
    <div id="title">
        <img src="../IMG/logo_ecobleu.png/" alt="logo_ecobleu" class="logo_ecobleu">
        <h1>éco-gestes au quotidien</h1>
    </div>
    <div id="image">
        <img src="../IMG/Cuisine.png/" alt="cuisine" class="cuisine">
    </div>
    <div id="container_title_elec">
        <a href="./cuisine.php?container_elec">
            <h2 class="title_elec">Agir sur l'électricité</h2>
        </a>
    </div>
    <div id="electricite" <?= $container_electricite ?>>
        <div id="text_one_elec">
            <p>Nettoyer régulièrement la grille arrière du réfrigérateur</p>
        </div>
        <div id="text_two_elec">
            <p>Nettoyer régulièrement le filtre de votre lave-vaisselle</p>
        </div>
        <div id="text_three_elec">
            <p>Dégivrer régulièrement le congélateur et le réfrigérateur</p>
        </div>
        <div id="text_four_elec">
            <p>Remplissez complètement votre lave-vaisselle</p>
        </div>
        <div id="text_five_elec">
            <p>Laisser refroidir les plats avant de les mettre au réfrigérateur</p>
        </div>
        <div id="text_six_elec">
            <p>Utiliser des casseroles adaptées à la taille des plaques</p>
        </div>
        <div id="text_seven_elec">
            <p>Pendant la cuisson, couvrez les casseroles</p>
            <span class="italic_ardoise">= 4x moins d’électricité ou de gaz consommés</span>
        </div>
        <div id="text_eight_elec">
            <p>Coupez les plaques électriques un peu avant la fin de la cuisson</p>
        </div>
        <div id="text_nine_elec">
            <p>J’ouvre le congélateur et le réfrigérateur le moins longtemps possible pour ne pas laisser le froid s’échapper</p>
        </div>
        <div id="text_ten_elec">
            <p>J’évite de mettre des plats encore chaud au réfrigérateur</p>
        </div>
        <div id="text_eleven_elec">
            <p>Je choisis des appareils électroménagers économes, classés de A+ à A+++</p>
            <span class="italic_ardoise">Un appareil A+++ consomme jusqu’à 50% de moins</span>
        </div>
    </div>
    <div id="container_title_eau">
        <a href="./cuisine.php?container_eau">
            <h2 class="title_eau">Agir sur l'eau</h2>
        </a>
    </div>
    <div id="eau"  <?= $container_eau ?>>
        <div id="text_one_eau">
            <p>Ne prélavez pas la vaisselle</p>
        </div>
        <div id="text_two_eau">
            <p>Utilisez 2 bacs pour faire la vaisselle afin d’éviter de laisser couler l’eau</p>
        </div>
    </div>
    <div id="retour">
        <a href="../index.php">
            <i class="fas fa-undo"></i>
        </a>
        <h3>Menu</h3>
    </div>

    <script src="../JS/show_titles.js"></script>
</body>
</html>
