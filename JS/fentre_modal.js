let myAccount = document.getElementById('mon_compte');
let fenetreModal = document.getElementById('fenetre_modal');
let close = document.getElementById('close_modal');
let buttonInscription = document.getElementById('inscription');
let buttonDiv = document.getElementById('close_button');
let formulaire = document.getElementById('formulaire_server');

myAccount.addEventListener('click', function () {
   if(fenetreModal.style.display !== "flex") {
       fenetreModal.style.display = "flex";
   }
});

close.addEventListener('click', function () {
    if(fenetreModal.style.display !== "none") {
        fenetreModal.style.display = "none";
    }
})

buttonInscription.addEventListener('click', function () {
    if (buttonDiv.style.display !== "none") {
        buttonDiv.style.display = "none";
        formulaire.style.display = "flex";
        formulaire.style.flexDirection = "column";
        formulaire.style.alignItems = "center";
        formulaire.style.display = "center";
    }
});
