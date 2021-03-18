<?php
    $container_temperature = "style='display: none'";
    $container_electricite = "style='display: none'";
    $container_eau = "style='display: none'";

    if(isset($_GET['container_temperature'])) {
        $container_temperature = "style='display: block'";
    }

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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0fa7bf339b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/salle_de_bain_agir_sur_la_temperature.css">
    <link rel="stylesheet" href="../CSS_TABLETTE/salle_de_bain_agir_sur_la_temperature_tablette.css">
    <title>Salle-de-bain-agir-sur-la-temperature</title>
</head>
<body>

    <div id="title">
        <img src="../IMG/logo_ecobleu.png/" alt="logo_ecobleu" class="logo_ecobleu">
        <h1>éco-gestes au quotidien</h1>
    </div>
    <div id="container-principal">
        <div id="container_title">
            <h2 >Salle de bain</h2>
        </div>
        <div id="image">
            <img src="../IMG/Salle_de_bain.png/" alt="salle_de_bain" class="salle_de_bain">
        </div>
        <div id="container_title_temp">
            <a href="./salle_de_bain_agir_sur_la_temperature.php?container_temperature">
                <h2 class="title_temp">Agir sur la température</h2>
            </a>
        </div>
        <div id="container_temperature" <?= $container_temperature ?>>
            <div id="text_one">
                <p>22° température recommandée pendant la toilette (18° le reste du temps)</p>
            </div>
        </div>
        <div id="container_title_elec">
            <a href="./salle_de_bain_agir_sur_la_temperature.php?container_elec">
                <h2 class="title_elec">Agir sur l'électricité</h2>
            </a>
        </div>
        <div id="electricite" <?= $container_electricite ?>>
            <div id="text_one_elec">
                <p>Laver son linge a 30°</p>
                <span class="italic_elec">= 3x moins d'électricité qu’à 90°C</span>
            </div>
            <div id="text_two_elec">
                <p>Laisser sécher son linge à l’air libre</p>
                <span class="italic_elec">Le sèche-linge est très gourmand en électricité</span>
            </div>
            <div id="text_three_elec">
                <p>Je me lave les mains à l’eau froide</p>
                <span class="italic_elec">Pas la peine d’allumer l’eau chaude : le temps que je me lave les mains, l’eau aura à peine le temps
                    de chauffer !
                </span>
            </div>
        </div>
        <div id="container_title_eau">
            <a href="./salle_de_bain_agir_sur_la_temperature.php?container_eau">
                <h2 class="title_eau">Agir sur l'eau</h2>
            </a>
        </div>
        <div id="eau" <?= $container_eau ?>>
            <div id="text_one_eau">
                <p>Coupez l’eau pendant le savonnage</p>

            </div>
            <div id="text_two_eau">
                <p>Prendre des douches de 5 min</p>
            </div>
            <div id="text_three_eau">
                <p>Préférez les douches au bain</p>
                <span class="italic_eau">1 bain = 3 douches</span>
            </div>
            <div id="text_four_eau">
                <p>Installer un mousseur sur le robinet</p>
                <span class="italic_eau">un mousseur réduit de 30 à 50% le débit du robinet</span>
            </div>
            <div id="text_five_eau">
                <p>Je coupe l’eau qui coule inutilement</p>
                <span class="italic_eau">un robinet qui goutte = 120 litres/jour en moyenne</span>
            </div>
            <div id="text_six_eau">
                <p>Installez un WC avec une chasse d’eau ECO</p>
                <span class="italic_eau">une chasse d’eau à double débit consomme entre 3 et 6 litres d’eau, elle permet une économie annuelle
                    de 30 ㎥ pour une famille de 4 personnes
                </span>
            </div>
            <div id="text_seven_eau">
                <p>Repérez les fuites et réparez-les rapidement</p>
                <span class="italic_eau">une chasse d’eau qui fuit = plus de 600 litres/jour</span>
            </div>
            <div id="text_eigth_eau">
                <p>Remplissez complètement votre lave-linge avant de l’utiliser</p>
            </div>
        </div>
    </div>
    <div id="retour">
        <a href="../index.php">
            <i class="fas fa-undo"></i>
        </a>
        <h3>Retour menu</h3>
    </div>
</body>
</html>
