const scrollBtn = document.getElementById('scrollUp');

scrollBtn.addEventListener('click', ()=>{
	window.scrollTo(0, 0)
});

window.onscroll = () => {
	if(window.scrollY > 700){
		scrollBtn.classList.remove('isShowBtn_hide')
	}else if(window.scrollY < 700){
		scrollBtn.classList.add('isShowBtn_hide')
	}
};