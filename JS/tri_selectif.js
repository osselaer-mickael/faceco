let poubelleTri = document.getElementById('poubelle_tri');
let poubelleNoire = document.getElementById('poubelle_noire');
let dropDownPoubelleTri = document.getElementById('drop_down1');
let dropDownPoubelleNoire = document.getElementById('drop_down2');

poubelleTri.addEventListener('click', function () {
    if(dropDownPoubelleTri.style.display !== "block") {
        dropDownPoubelleTri.style.display = "block";
    }
    else (dropDownPoubelleTri.style.display = "none")
});

poubelleNoire.addEventListener('click', function () {
    if (dropDownPoubelleNoire.style.display !== "block") {
        dropDownPoubelleNoire.style.display = "block";
    }
    else (dropDownPoubelleNoire.style.display = "none")
})