<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu-Le tri séléctif</title>
    <link rel="stylesheet" href="../CSS/jeuxstyle.css">
    <script src="https://kit.fontawesome.com/351e9300a0.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="tous">

    <div id="titre">
        <h1>A vous de jouer</h1>
    </div>

    <div id="random" class="random" >
    </div>

    <div id="poubelles">


        <div id="poubelleNoir" ondrop="onDrop('Pn')">
            <img  src="../images/Poubelle_noire.png" alt="poubelle_noire">
        </div>

        <div id="poubelleTri" ondrop="onDrop('pv')">
            <img  src="../images/Poubelle_de_tri.png" alt="poubelle_de_tri">
        </div>

        <div id="container" ondrop="onDrop('cg')">
            <img  src="../images/Container.png" alt="Conatainer">
        </div>

    </div>

</div>

<section class="win-game-modal">
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close"></span>
            <h2>FELICITATION!</h2>
        </div>
    </div>
</section>

<section class="lost-game-modal">
    <div id="modall" class="modal">
        <div class="modal-content">
            <span class="close"></span>
            <h2>DOMMAGE!</h2>
        </div>
    </div>
</section>

<div id="retour">
    <a href="../index.php">
        <i class="fas fa-undo"></i>
    </a>
    <h3>Retour menu</h3>
</div>

    <script src="../JS/jeuxapp.js"></script>
</body>
</html>
