//I get my elements to store them in a variable

let arrowGesture = document.getElementById('arrow_gesture');
let dropDownGesture = document.getElementsByClassName('drop_down_ecos_gestures_li');
let arrowSelective = document.getElementById('arrow_selective');
let dropDownSelective = document.getElementsByClassName('drop_down_selective_sorting_li');
let arrowFollow = document.getElementById('arrow_follow_up');
let dropDownFollow = document.getElementsByClassName('drop_down_follow_up_li');
let dropDownBed = document.getElementById('chambre');
let temperature = document.getElementById('temperature');
let salleDeBain = document.getElementById('salle_de_bain');
let dropDownSalleDeBain = document.getElementById('drop_down_salle_de_bain');
let salon = document.getElementById('salon');
let dropDownSalon = document.getElementById('drop_down_salon');
let cuisine = document.getElementById('cuisine');
let dropDownCuisine = document.getElementById('drop_down_cuisne');
let buandrie = document.getElementById('buandrie');
let dropDownBuandrie = document.getElementById('drop_down_buandrie');
let infos = document.getElementById('infos');
let dropDownInfos = document.getElementById('drop_down_infos');
let equipement = document.getElementById('equipement');
let dropDownEquipement = document.getElementById('drop_down_equipement');
let dechet = document.getElementById('dechet');
let dropDownDechet = document.getElementById('drop_down_dechet');

//I create a listening on the buttons and i to give an animation

arrowGesture.addEventListener('click', function () {
    for (let i = 0; i < dropDownGesture.length; i++) {
        if (dropDownGesture[i].style.display !== "block") {
            dropDownGesture[i].style.display = "block";
            if ( i === dropDownGesture.length - 1) {
                arrowGesture.classList.add('arrow-down-animation');
            }
        }
        else {
            dropDownGesture[i].style.display = "none";
            temperature.style.display = "none";
            dropDownSalleDeBain.style.display = "none";
            dropDownSalon.style.display = "none";
            dropDownCuisine.style.display = "none"
            dropDownBuandrie.style.display = "none";
            dropDownInfos.style.display = "none";
            dropDownEquipement.style.display = "none";
            if ( i === dropDownGesture.length - 1) {
                arrowGesture.classList.remove('arrow-down-animation');
            }
        }
    }
});

//
arrowSelective.addEventListener('click', function () {
    for (let i = 0; i < dropDownSelective.length; i++) {
        if (dropDownSelective[i].style.display !== "block") {
            dropDownSelective[i].style.display = "block";
            if ( i === dropDownSelective.length - 1) {
                arrowSelective.classList.add('arrow-down-animation');
            }
        }
        else {
            dropDownSelective[i].style.display = "none";
            dropDownDechet.style.display = "none";
            if ( i === dropDownSelective.length - 1) {
                arrowSelective.classList.remove('arrow-down-animation');
            }
        }
    }
});
//

arrowFollow.addEventListener('click', function () {
    for (let i = 0; i < dropDownFollow.length; i++) {
        if (dropDownFollow[i].style.display !== "block") {
            dropDownFollow[i].style.display = "block";
            if ( i === dropDownFollow.length -1) {
                arrowFollow.classList.add('arrow-down-animation');
            }
        } else {
            dropDownFollow[i].style.display = "none";
            if ( i === dropDownFollow.length -1) {
                arrowFollow.classList.remove('arrow-down-animation');
            }
        }
    }
});

dropDownBed.addEventListener('click', function () {
    if(temperature.style.display !== "block") {
        temperature.style.display = "block";
    }
    else {
        temperature.style.display = "none";
    }
});

 salleDeBain.addEventListener('click', function () {
     if(dropDownSalleDeBain.style.display !== "block") {
         dropDownSalleDeBain.style.display = "block";
     }
     else {
         dropDownSalleDeBain.style.display = "none";
     }
 });

 salon.addEventListener('click', function () {
     if(dropDownSalon.style.display !== "block") {
         dropDownSalon.style.display = "block";
     }
     else {
         dropDownSalon.style.display = "none";
     }
 });

 cuisine.addEventListener('click', function () {
     if(dropDownCuisine.style.display !== "block") {
         dropDownCuisine.style.display = "block";
     }
     else {
         dropDownCuisine.style.display = "none";
     }
 });

 buandrie.addEventListener('click', function () {
     if(dropDownBuandrie.style.display !== "block") {
         dropDownBuandrie.style.display = "block";
     }
     else {
         dropDownBuandrie.style.display = "none";
     }
 });

 infos.addEventListener('click', function () {
     if(dropDownInfos.style.display !== "block") {
         dropDownInfos.style.display = "block";
     }
     else {
         dropDownInfos.style.display = "none";
     }
 });

 equipement.addEventListener('click', function () {
     if(dropDownEquipement.style.display !== "block") {
         dropDownEquipement.style.display = "block";
     }
     else {
         dropDownEquipement.style.display = "none";
     }
 });

 dechet.addEventListener('click', function () {
     if(dropDownDechet.style.display !== "block") {
         dropDownDechet.style.display = "block";
     }
     else {
         dropDownDechet.style.display = "none";
     }
 });



