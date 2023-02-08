const burger = document.querySelector('.main-menu__btn');
const menu = document.querySelector('.main-menu__bg');
const cross = document.querySelector('.main-menu__cross');
const overlay = document.querySelector('.header__overlay');
const body = document.querySelector('body');


burger.addEventListener('click', menuToogle);
cross.addEventListener('click', menuToogle);


overlay.addEventListener('click', menuToogle);

function menuToogle(){
    burger.classList.toggle('show');
    menu.classList.toggle('show'); 
    overlay.classList.toggle('show');
    body.classList.toggle('no-scroll');
}

