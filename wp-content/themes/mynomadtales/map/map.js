
$(document).ready(function(e) {
	
	$('.mmap svg .group').on('mouseover', function(){
		var region = $(this).attr('id');
		popup_close( region, function(elem){
			  $('.popup-wraper.'+region).fadeIn(300);
		});
	});
	
	jQuery(function($){
		$(document).mouseup(function (e){ // событие клика по веб-документу
		//console.log('click');
			var div = $(".popup-wraper"); // тут указываем ID элемента
			if (!div.is(e.target) // если клик был не по нашему блоку
				&& div.has(e.target).length === 0) { // и не по его дочерним элементам
				popup_close_all(); // скрываем его
			}
		});
	});
	$('.mmap svg .link').on('click', function(){
		window.location=$(this).attr('link'); 
	});
	
	
});

function popup_close(region, onComplete){
	$('.popup-wraper').not('.'+region).fadeOut(100);
	onComplete(region);
}

function popup_close_all( ){
	$('.popup-wraper').fadeOut(300);
	return false;
}