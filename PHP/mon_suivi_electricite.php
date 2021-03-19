<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/mon_suivi_electricite.css">
    <title>Mon-suivi-electricite</title>
</head>
<body>
    <div id="title_my_follow_up">
        <img src="../IMG/logo_mon_suivi_bleu" alt="follow" class="follow">
        <h1>Mon suivi</h1>
    </div>
    <div id="suivi_conso">
        <h2>Ma consommation électrique (kw/w) :</h2>
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
        <div class="kilowatt">
            <input class="input-test" type="number" name="consommation_kwh" placeholder="Kw/h">
        </div>
    </div>
    <div id="graphic_one">
        <canvas id="myChart" width="400" height="400"></canvas>
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
        <div class="kilowatt">
            <input class="input-test" type="number" name="depense" placeholder="Dépenses /€">
        </div>
    </div>
    <div id="graphic_two">
        <canvas id="myGraphic" width="400" height="400"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../JS/graphic.js"></script>
</body>
</html>