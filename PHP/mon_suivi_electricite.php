<?php
    require_once "../includes.php";
    $managerType = new ConsommationTypeManager();
    $managerConsommation = new ConsommationManager();

    $consommationTypeElec = $managerType->getByName('électricité');

    // Si les champs sont présents, c'est qu'un ajout a été demandé.
    if(isset($_POST['month']) && isset($_POST['consommation_kwh'])) {
        $month = trim(strip_tags($_POST['month']));
        $amount = intval(trim(strip_tags($_POST['consommation_kwh'])));
        $conso = $managerConsommation->addConsommation($user, $consommationTypeElec, $amount, $month);
        $managerConsommation->save($conso);
    }

    // Récupération des consommations à afficher dans le graphique.
    $consos = $managerConsommation->getConsommations($user, $consommationTypeElec);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/mon_suivi_electricite.css">
    <script src="https://kit.fontawesome.com/0fa7bf339b.js" crossorigin="anonymous"></script>
    <title>Mon-suivi-electricite</title>
</head>
<body>
    <div id="container_top">
        <div id="title_my_follow_up">
            <img src="../IMG/logo_mon_suivi_bleu" alt="follow" class="follow">
            <h1>Mon suivi</h1>
        </div>
        <div id="suivi_conso">
            <h2>Ma consommation électrique (kw/h) :</h2>
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
                    <input class="input-test" type="number" name="consommation_kwh" placeholder="Kw/h">
                </div>
                <input type="submit" name="submit" value="Ajouter conso" id="ajout_conso">
            </form>
        </div>
    </div>
        <!-- Graphique consommations -->
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
        <div id="graphic_one">
            <canvas id="myChart"></canvas>
        </div>
        <div id="suivi_depense">
            <h2>Mes dépenses (€) :</h2>
        </div>
        <div id="graphic_two">
            <canvas id="myGraphic"></canvas>
        </div>

    <div id="retour">
        <a href="../index.php">
            <i class="fas fa-undo"></i>
        </a>
        <h3>Menu</h3>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../JS/graphic_electricite.js"></script>
</body>
</html>