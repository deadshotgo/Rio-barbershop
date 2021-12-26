const home = document.querySelector('.home-icon');
const menu = document.querySelector('.main-menu');
const phoneBtn = document.querySelector('.phone-block');

home.addEventListener('click', ()=>{
	menu.classList.toggle('menuActive');
	menu.classList.toggle('animate__backInLeft');
})