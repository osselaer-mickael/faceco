let myAccount = document.getElementById('mon_compte');
let fenetreModal = document.getElementById('fenetre_modal');
let close = document.getElementById('close_modal');

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

