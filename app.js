
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


