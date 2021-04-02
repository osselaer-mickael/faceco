<?php
    require_once "../includes.php";
    $managerType = new ConsommationTypeManager();
    $managerConsommation = new ConsommationManager();

    $consommationTypeGaz = $managerType->getByName('gaz');

    // Si les champs sont présents, c'est qu'un ajout a été demandé.
    if(isset($_POST['month']) && isset($_POST['consommation_kwh'])) {
        $month = trim(strip_tags($_POST['month']));
        $amount = intval(trim(strip_tags($_POST['consommation_kwh'])));
        $conso = $managerConsommation->addConsommation($user, $consommationTypeGaz, $amount, $month);
        $managerConsommation->save($conso);
    }

    // Récupération des consommations à afficher dans le graphique.
    $consos = $managerConsommation->getConsommations($user, $consommationTypeGaz);
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/mon_suivi_gaz.css">
    <script src="https://kit.fontawesome.com/0fa7bf339b.js" crossorigin="anonymous"></script>
    <title>Mon-suivi-gaz</title>
</head>
<body>
    <div id="container_top">
        <div id="title_my_follow_up">
            <img src="../IMG/logo_mon_suivi_bleu" alt="follow" class="follow">
            <h1>Mon suivi</h1>
        </div>
        <div id="suivi_conso">
            <h2>Ma consommation de gaz (kwh) :</h2>
        </div>
        <div id="container_input">
            <form action="" method="post">
                <div class="month">
                    <label for="month"></label>
                    <select class="select-test" name="month" id="month">
                        <option value="janvier">Janvier</option>
                        <option value="fevrier">Février</option>
                        <option value="mars">Mars</option>
                        <option value="avril">Avril</option>
                        <option value="mai">Mai</option>
                        <option value="juin">Juin</option>
                        <option value="juillet">Juillet</option>
                        <option value="aout">Août</option>
                        <option value="septembre">Septembre</option>
                        <option value="octobre">Octobre</option>
                        <option value="novembre">Novembre</option>
                        <option value="decembre">Décembre</option>
                    </select>
                </div>
                <div class="kilowatt">
                    <input class="input-test" type="number" name="consommation_kwh" placeholder="Kwh">
                </div>
                <input type="submit" name="submit" value="Ajouter conso" id="ajout_conso">
            </form>
        </div>
    </div>

    <!-- Graphique consommations -->
    <div id="container_principal">
        <div id="data"> <?php
            // Création de spans masqués contenant les informations.
            foreach($consos as $conso) {
                /* @var Consommation $conso */ ?>
                <span style="display: none"
                      id="<?= $conso->getId() ?>"
                      data-month="<?= $conso->getMonth() ?>"
                      data-qty="<?= $conso->getQuantity() ?>"
                      data-unitprice="<?= $conso->getConsommationType()->getUnitPrice() ?>"
                >
                </span> <?php
            } ?>
        </div>
        <div id="conso">
            <div id="suivi_conso_tab">
                <h2 class="conso">Ma consommation</h2>
            </div>
            <div id="graphic_one">
                <canvas id="my_chart_gaz" width="400" height="400"></canvas>
            </div>
        </div>
        <div id="depense">
            <div id="suivi_depense">
                <h2>Mes dépenses (€) :</h2>
            </div>
            <div id="graphic_two">
                <canvas id="my_graphic_gaz" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <div id="retour">
        <a href="../index.php">
            <i class="fas fa-undo"></i>
        </a>
        <h3>Menu</h3>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../JS/graphic_gaz.js"></script>
</body>
</html>