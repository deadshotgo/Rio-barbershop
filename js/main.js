// slider
const slider = document.querySelectorAll('.slide-item');
let index = 0;

const activeSlide = el => {
	for(let i = 0; i < slider.length; i++){
		slider[i].classList.remove('active');
	}
	slider[el].classList.add('active');
};

const nextSlide = () => {
	if(index == slider.length - 1){
		index = 0;
		activeSlide(index);
	}else{
		index++;
		activeSlide(index);
	}
};
const sliderSecond = document.querySelectorAll('.slide-item-second');

const activeSlideSecond = el => {
	for(let i = 0; i < sliderSecond.length; i++){
		sliderSecond[i].classList.remove('active');
	}
	sliderSecond[el].classList.add('active');
};

const nextSlideSecond = () => {
	if(index == sliderSecond.length - 1){
		index = 0;
		activeSlideSecond(index);
	}else{
		index++;
		activeSlideSecond(index);
	}
};
// let elements = [...document.querySelectorAll('.slide-item')].forEach(item => { 
//   item.addEventListener('click', ()=>{
//     nextSlide();
//     activeAuto();
//     });
// });
let auto;
const activeAuto = () => {
	auto = setInterval(() => nextSlide(), 2000);

}
let autoSecond;
const activeAutoSecond = () => {
	autoSecond = setInterval(() => nextSlideSecond(), 2300);

}
activeAutoSecond();
activeAuto();
