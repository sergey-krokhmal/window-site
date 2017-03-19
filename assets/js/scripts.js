$(document).ready(function(){
    $('.window-slider>.bxslider').bxSlider({
		pager: false,
		infiniteLoop: false,
		controls: true,
		hideControlOnEnd: true,
		minSlides: 2,
		maxSlides: 3,
		slideWidth: 215,
        slideMargin: 20,
		moveSlides: 4,
        nextSelector: '.slider-right',
        prevSelector: '.slider-left'
	});
});