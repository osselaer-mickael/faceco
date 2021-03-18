let visible = document.querySelector('div[style="display: block"]');

// Si la hauteur dépasse de la hauteur totale de la fenêtre, alors on scroll vers le haut.
const windowHeight = window.outerHeight;
const elementY = parseInt(window.getComputedStyle(visible, null).getPropertyValue('height')) + visible.getBoundingClientRect().top;

if(windowHeight < elementY) {
    let to = visible.previousElementSibling.getBoundingClientRect().top;
    console.log(to);
    window.scrollTo(0, to - 10);
}
