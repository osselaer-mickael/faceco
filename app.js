let arrowGesture = document.getElementById('arrow_gesture');
let dropDownGesture = document.getElementsByClassName('drop_down_ecos_gestures_li');
let arrowSelective = document.getElementById('arrow_selective');
let dropDownSelective = document.getElementsByClassName('drop_down_selective_sorting_li');
let arrowFollow = document.getElementById('arrow_follow_up');
let dropDownFollow = document.getElementsByClassName('drop_down_follow_up_li');

arrowGesture.addEventListener('click', function () {
    for (let i = 0; i < dropDownGesture.length; i++) {
        if (dropDownGesture[i].style.display !== "block") {
            dropDownGesture[i].style.display = "block";
            if ( i === dropDownGesture.length - 1) {
                arrowGesture.style.rotate = "180deg";
            }
        }
        else {
            dropDownGesture[i].style.display = "none";
            if ( i === dropDownGesture.length - 1) {
                arrowGesture.style.rotate = "360deg";
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
                arrowSelective.style.rotate = "180deg";
            }
        }
        else {
            dropDownSelective[i].style.display = "none";
            if ( i === dropDownSelective.length - 1) {
                arrowSelective.style.rotate = "360deg";
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
                arrowFollow.style.rotate = "180deg";
            }
        } else {
            dropDownFollow[i].style.display = "none";
            if ( i === dropDownFollow.length -1) {
                arrowFollow.style.rotate = "360deg";
            }
        }
    }
});


