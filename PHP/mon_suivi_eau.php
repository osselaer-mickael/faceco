<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0fa7bf339b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/mon_suivi_eau.css">
    <title>Mon-suivi-eau</title>
</head>
<body>
    <div id="title_my_follow_up">
        <img src="../IMG/logo_mon_suivi_bleu" alt="follow" class="follow">
        <h1>Mon suivi</h1>
    </div>
    <div id="suivi_conso">
        <h2>Ma consommation d'eau (m3) :</h2>
    </div>
    <div id="container_input">
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
        <div class="eau">
            <input class="input-test" type="number" name="consommation_m3" placeholder="Conso en m3">
        </div>
    </div>
    <div id="graphic_one">
        <canvas id="conso_eau" width="400" height="400"></canvas>
    </div>
    <div id="suivi_depense">
        <h2>Mes dépenses (€) :</h2>
    </div>
    <div id="container_input">
        <div class="month">
            <label for="month"></label>
            <select name="month" id="month" class="select-test">
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
        <div class="eau">
            <input class="input-test" type="number" name="depense" placeholder="Dépenses /€">
        </div>
    </div>
    <div id="graphic_two">
        <canvas id="my_graphic_eau" width="400" height="400"></canvas>
    </div>
    <div id="retour">
        <a href="../index.php">
            <i class="fas fa-undo"></i>
        </a>
        <h3>Menu</h3>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../JS/graphic_eau.js"></script>
</body>
</html>
