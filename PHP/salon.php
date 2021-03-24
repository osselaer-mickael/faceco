<?php
    $container_elec = "style='display: none'";
    $container_air = "style='display: none'";

    if(isset($_GET['container_elec'])) {
        $container_elec = "style='display: block'";
    }

    if(isset($_GET['container_air'])) {
        $container_air = "style='display: block'";
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
    <link rel="stylesheet" href="../CSS/salon.css">
    <title>Salon</title>
</head>
<body>

    <div id="title">
        <img src="../IMG/logo_ecobleu.png/" alt="logo_ecobleu" class="logo_ecobleu">
        <h1>Eco-gestes au quotidien</h1>
    </div>
    <div id="responsive">
        <div id="image">
            <img src="../IMG/Salon.png/" alt="salon" class="salon">
        </div>
        <div id="container-principal">
            <div id="container_title_elec">
                <a href="./salon.php?container_elec">
                    <h2 class="title_elec">Agir sur l'électricité</h2>
                </a>
            </div>
            <div id="electricite" <?= $container_elec ?>>
                <div id="text_one_elec">
                    <p>Éteindre les lumières en sortant d’une pièce</p>
                    <span class="italic_ardoise">L’éclairage représente 10% de la consommation d'électricité en France</span>
                </div>
                <div id="text_two_elec">
                    <p>Eviter l’usage de radiateurs d’appoint électrique ou gaz</p>
                </div>
                <div id="text_three_elec">
                    <p>Eteindre les veilles des appareils audiovisuels grâce à une multiprise</p>
                    <span class="italic_ardoise">Jusqu’à 10% d’économie d’énergie</span>
                </div>
            </div>
            <div id="container_title_air">
                <a href="./salon.php?container_air">
                    <h2 class="title_air">Agir sur la qualité de l’air</h2>
                </a>
            </div>
            <div id="air" <?= $container_air ?>>
                <div id="text_one_air">
                    <p>Aérer les pièces 5 à 10 min par jour</p>
                </div>
                <div id="text_two_air">
                    <p>Ne brûlez pas de bougies ou d’encens. Ils émettent des polluants</p>
                </div>
                <div id="text_three_air">
                    <p>Nettoyez et dépoussiérez les bouches de ventilation</p>
                </div>
                <div id="text_four_air">
                    <p>Débranchez votre ordinateur et/ou tablette. Même éteint ils consomment de l'électricité</p>
                </div>
                <div id="text_five_air">
                    <p>Evitez les abat-jour sombres ou épais</p>
                </div>
                <div id="text_six_air">
                    <p>Utilisez des lampes à LED</p>
                    <span class="italic_vert">Elles consomment 5 à 10 fois moins que les vieilles ampoules et durent 20 à 50 fois plus longtemps</span>
                </div>
            </div>
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
