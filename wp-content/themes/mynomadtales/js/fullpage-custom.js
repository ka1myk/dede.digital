$(document).ready(function(e) {
	//alert('После этих слов должны быть цифры '+window.innerHeight);
	//alert('После этих слов должны  '+$(window).innerHeight());
	size_checker(function(){
		if( window.innerHeight >= 440){
			//alert(window.innerHeight);
			fullpage_init();
		}
	});

});


$(window).resize(function(e) {
	size_checker(function(){
		fullpage_reinit();
	});
});


window.addEventListener("orientationchange", function() {
    // Перезагрузим страницу при изменении ориентации страницы
 	location.reload();
}, false);


//Проверяем ширину экрана
function size_checker(onComplete){
	console.log('size_checker');
	if( window.innerWidth >= 760){
		$('section.hide-760').removeClass('section').addClass('section-hide').css({'display' : 'none'});
		console.log('hide');
	}else{
		$('section.hide-760').removeClass('section-hide').addClass('section').css({'display' : 'block'});
		console.log('show');
	}
	onComplete(window.innerWidth);
}

//Переинициируем скрипт 
function fullpage_reinit(){
	
		try {
		  //Пробуем перестроить fullpage
		  fullpage_api.reBuild();
		  console.log('fullpage reBuild');
		} catch (error) {
		  //Если не получилось, инициируем заново
			console.log('fullpage error - fullpage_init');
		}
}

//Инициируем скрипт для полностраничной прокрутки страниц
function fullpage_init(){
	
	 var myFullpage = new fullpage('#fullpage', {
			verticalCentered: false,
			lockAnchors : true,
			anchors : [ 'event-map' ] ,
			//fitToSection : false,
			afterRender :  function () {
			},
			onLeave: function(origin, destination, direction){
				var leavingSection = this;
				if(origin.index == 0 && direction =='down'){ $('.logo').addClass('trans'); }
				else if(origin.index == 1 && direction == 'up'){ $('.logo').removeClass('trans');}
			}
	 });
}