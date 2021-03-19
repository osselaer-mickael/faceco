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
        <h2>Ma consommation :</h2>
    </div>
    <div id="graphic_one">
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>
    <div id="graphic_two">
        <canvas id="myGraphic" width="400" height="400"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../JS/graphic.js"></script>
</body>
</html>