/*

File for all the basic js functions a page on this website needs for
the burger menu and pre loader

*/
const burger = document.querySelector('.burger');
const burgerMenu = document.querySelector('.burgerMenu');
const navBar = document.querySelector('.navBar');
var navButtonContainer = document.querySelectorAll('.navButtonContainer');

burger.addEventListener('click', () => {

    toggle();

});

navButtonContainer.forEach(navButton => {

    navButton.addEventListener('click', () => {

        if(burger.classList.contains('open')){

            toggle();

        }

    });

});

function toggle(){

    burger.classList.toggle("open");
    burgerMenu.classList.toggle("openBurgerMenu");
    navBar.classList.toggle("navBarOpen");

    navButtonContainer.forEach((buttonContainer, index) => {

        buttonContainer.firstElementChild.classList.toggle("navButtonOpen");
        if (buttonContainer.style.animation) {
            buttonContainer.style.animation = '';
        } else {
            buttonContainer.style.animation = `linksFadeIn 0.6s ease-in-out forwards ${index / 40}s`;
        }
    });

}

//stop animations from playing when the window is being resized
//removes the jank look
var resizeTimer;
window.addEventListener("resize", e => {

    document.body.classList.add("resize-animation-stopper");

    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        document.body.classList.remove("resize-animation-stopper");
    }, 400);

});