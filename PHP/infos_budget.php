<?php
    $container_energie = "style='display: none'";
    $container_electricite = "style='display: none'";
    $container_eau = "style='display: none'";

    if(isset($_GET['energie'])) {
        $container_energie = "style='display: block'";
    }

    if(isset($_GET['electricite'])) {
        $container_electricite = "style='display: block'";
    }

    if(isset($_GET['eau'])) {
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
    <link rel="stylesheet" href="../CSS/infos_budget.css">
    <link rel="stylesheet" href="../CSS_TABLETTE/infos_budget_tablette.css">
    <title>Infos pratique</title>
</head>
<body>
    <div id="title">
        <img src="../IMG/logo_ecobleu.png/" alt="logo_ecobleu" class="logo_ecobleu">
        <h1>éco-gestes au quotidien</h1>
    </div>
    <div id="container-principal">
        <div id="container_title_energie">
            <a href="./infos_budget.php?energie">
                <h2 class="energie">Le budget énergie d’un ménage</h2>
            </a>
        </div>
        <div id="energie" <?= $container_energie ?>>
            <div id="text_one">
                <p>
                    Un ménage consacre en moyenne 8,5% de son budget annuel à ses factures d’énergies : pour ses déplacements
                    (48%) et pour son logement (52%).
                </p>
                <p class="gras">
                    Cela vous semble peu ?
                    Pourtant cela représente en moyenne 2900€ par ménage et par an.
                </p>
            </div>
            <div id="image1">
                <img src="../IMG/Des_chffres_qui_parlent_1.png" alt="image1" class="image1">
            </div>
        </div>
        <div id="container_title_elec">
            <a href="./infos_budget.php?electricite">
                <h2 class="energie">De plus en plus d’électricité consommée</h2>
            </a>
        </div>
        <div id="electricite" <?= $container_electricite ?>>
            <div id="image2">
                <img src="../IMG/Des_chiffres_qui_parlent_2.png" alt="image2" class="image2">
            </div>
        </div>
        <div id="container_title_eau">
            <a href="./infos_budget.php?eau">
                <h2 class="energie">L’eau potable : attention aux fuites !</h2>
            </a>
        </div>
        <div id="eau" <?= $container_eau ?>>
            <div id="text_three">
                <p class="eau">143 litres d’eau potable par français/jour c’est beaucoup !</p>
            </div>
            <div id="container_image3_and_image4">
                <div id="image3">
                    <img src="../IMG/Des_chiffres_qui_parlent_3.png" alt="image3" class="image3">
                </div>
                <div id="image4">
                    <img src="../IMG/Des_chiffres_qui_parlent_4.png" alt="image4" class="image4">
                </div>
            </div>
        </div>
    </div>
    <div id="retour">
        <a href="../index.php">
            <i class="fas fa-undo"></i>
        </a>
        <h3>Retour menu</h3>
    </div>
    <script src="../JS/show_titles.js"></script>
</body>
</html>
