/*

File for all the basic js functions a page on this website needs for
the burger menu

*/
const burger = document.querySelector('.burger');
const burgerMenu = document.querySelector('.burgerMenu');
const navBar = document.querySelector('.navBar');
var navButtonContainer = document.querySelectorAll('.navButtonContainer');

burger.addEventListener('click', () => {

    toggle();

});
//close menu when nav button is clicked
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
        //if animtaion is applied then remove it so it may play again upon open
        if (buttonContainer.style.animation) {
            buttonContainer.style.animation = '';
        } else {
            buttonContainer.style.animation = `linksFadeIn 0.6s ease-in-out forwards ${index / 40}s`;
        }
    });

}