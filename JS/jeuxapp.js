let random = document.getElementById("random");
let preBuffer = document.createElement("img");
let modal = document.getElementById("modal");
let modallost = document.getElementById("modall");

/**
 *List of wastes
 */
let bigSize = [
    "../images/poubelle-noir/boite_en_polystyrene.png",
    "../images/poubelle-noir/Coquille_doeufs.png",
    "../images/poubelle-noir/Couvert_en_plastique.png",
    "../images/poubelle-noir/Epluchures.png",
    "../images/poubelle-noir/Gobelet_en_plastique.png",
    "../images/poubelle-noir/Paille_en_plastique.png",
    "../images/poubelle-noir/Pot_de_yaourt.png",
    "../images/poubelle-noir/Sac_en_plastique.png",
    "../images/poubelle-noir/Trognon_de_pomme.png",
    "../images/poubelle-verte/Aerosol.png",
    "../images/container/Bocal_en_verre.png",
    "../images/poubelle-verte/Boite_a_pizza.png",
    "../images/poubelle-verte/Boite_de_conserve.png",
    "../images/poubelle-verte/Boite_de_sardine.png",
    "../images/poubelle-verte/Boite_doeufs_en_carton.png",
    "../images/container/Bouteille_de_biere.png",
    "../images/container/Bouteille_de_lait.png",
    "../images/container/Bouteille_de_vin.png",
    "../images/poubelle-verte/Bouteille_deau.png",
    "../images/poubelle-verte/Bouteille_dhuile.png",
    "../images/poubelle-verte/Brique_de_jus_de_fruit.png",
    "../images/poubelle-verte/Brique_de_lait.png",
    "../images/poubelle-verte/Briquette_de_jus_de_fruit.png",
    "../images/poubelle-verte/Canette_cola.png",
    "../images/poubelle-verte/Carton.png",
    "../images/poubelle-noir/Vaisselle_cassee.png",
    "../images/poubelle-verte/Gel_douche.png",
    "../images/poubelle-verte/Grosse_bouteille_deau.png",
    "../images/poubelle-verte/Lessive.png",
    "../images/poubelle-verte/Papier.png",
    "../images/poubelle-verte/Papier_journal.png"
];

/**
 * random images
 */
function display_random_image (){
    preBuffer.src = bigSize[getRandomInt()];
    random.append(preBuffer);

    function getRandomInt(){
        randomNumber = Math.floor(Math.random() * 31);
        return randomNumber;
    }
}

display_random_image();

/**
 * Fonction DRAP & DROP
 */

/*The object to be moved*/

random.addEventListener('dragstart', fonction_dragstart,false);
random.addEventListener('dragend', fonction_dragend, false);

function fonction_dragend(ev){
    ev.preventDefault();
    let id = ev.target.id;
    this.style.opacity= 1;
}

function fonction_dragstart(ev){
    let id = ev.target.id;
    this.style.opacity= 0.2;
    ev.dataTransfer.setData("img",ev.target.id);
}

/* Target where to drop the object */

let ciblePoubelleTri = document.getElementById('poubelleTri')
let cibleContainerGlass = document.getElementById('container');
let ciblePoubelleNoir = document.getElementById('poubelleNoir');

ciblePoubelleTri.addEventListener('dragover', fonction_dragover, false);
ciblePoubelleTri.addEventListener('drop',fonction_drop, false);

cibleContainerGlass.addEventListener('dragover', fonction_dragover, false);
cibleContainerGlass.addEventListener('drop', fonction_drop, false);

ciblePoubelleNoir.addEventListener('dragover', fonction_dragover, false);
ciblePoubelleNoir.addEventListener('drop', fonction_drop, false);

function fonction_dragover(ev){
    ev.preventDefault();
}

function fonction_drop(ev){
    ev.preventDefault();
    let data=ev.dataTransfer.getData("img");
}

/**
 * Modal Win
 */
function displayModal() {

    let modalClose = document.getElementsByClassName("close")[0];


    modal.style.display= "block";


    modalClose.onclick = function() {
        modal.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
}

/**
 * Modal lost
 */
function displayModallost() {

    const modalClose = document.getElementsByClassName("close")[0];


    modallost.style.display= "block";


    modalClose.onclick = function() {
        modallost.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target === modallost) {
            modallost.style.display = "none";
        }
    };
}


/*
 * check if the images fit in the correct binn
 */
function onDrop(event) {
    const draggableElement = document.getElementById('random');
    let erreur = 0;


    for(let i = 0; i < PoubelleNoir.length; i++){
        if (preBuffer.src === PoubelleNoir[i] && event === "Pn") {
            erreur++;
            displayModal();
        }
    }

    for(let i = 0; i < PoubelleTri.length; i++){
        if (preBuffer.src === PoubelleTri[i] && event === "pv") {
            erreur++;
            displayModal();
        }

    }

    for(let i = 0; i < containerGlass.length; i++){
        if (preBuffer.src === containerGlass[i] && event === "cg") {
            erreur++;
            displayModal();
        }

    }
    if (erreur === 0){
        displayModallost();
    }
    erreur = 0;


    preBuffer.remove();
    display_random_image();
    stopGame();

    function stopGame() {
        if (random.src === 20){
            alert('Felicitation tu vas devenir un champion du tri');
        }
    }
}

let chemin = "http://localhost:8080/images/";

let PoubelleNoir = [
    chemin + "poubelle-noir/boite_en_polystyrene.png",
    chemin + "poubelle-noir/Coquille_doeufs.png",
    chemin + "poubelle-noir/Couvert_en_plastique.png",
    chemin + "poubelle-noir/Epluchures.png",
    chemin + "poubelle-noir/Gobelet_en_plastique.png",
    chemin + "poubelle-noir/Paille_en_plastique.png",
    chemin + "poubelle-noir/Pot_de_yaourt.png",
    chemin + "poubelle-noir/Sac_en_plastique.png",
    chemin + "poubelle-noir/Trognon_de_pomme.png",
    chemin + "poubelle-noir/Vaisselle_cassee.png"
];


let PoubelleTri = [
    chemin + "poubelle-verte/Aerosol.png",
    chemin + "poubelle-verte/Boite_a_pizza.png",
    chemin + "poubelle-verte/Boite_de_conserve.png",
    chemin + "poubelle-verte/Boite_de_sardine.png",
    chemin + "poubelle-verte/Boite_doeufs_en_carton.png",
    chemin + "poubelle-verte/Bouteille_deau.png",
    chemin + "poubelle-verte/Bouteille_dhuile.png",
    chemin + "poubelle-verte/Brique_de_jus_de_fruit.png",
    chemin + "poubelle-verte/Brique_de_lait.png",
    chemin + "poubelle-verte/Briquette_de_jus_de_fruit.png",
    chemin + "poubelle-verte/Carton.png",
    chemin + "poubelle-verte/Canette_cola.png",
    chemin + "poubelle-verte/Gel_douche.png",
    chemin + "poubelle-verte/Grosse_bouteille_deau.png",
    chemin + "poubelle-verte/Lessive.png",
    chemin + "poubelle-verte/Papier.png",
    chemin + "poubelle-verte/Papier_journal.png"
];

let containerGlass = [
    chemin + "container/Bocal_en_verre.png",
    chemin + "container/Bouteille_de_biere.png",
    chemin + "container/Bouteille_de_lait.png",
    chemin + "container/Bouteille_de_vin.png"
];