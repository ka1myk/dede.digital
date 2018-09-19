$(document).ready(function(e) {
	
	size_checker(function(){
		//Если альбомная ориентация Инициируем постраничную прокрутку при высоте больше 500px,
		//Если портретная то при высоте от 450 (для iphone 5 )
				
		if( (window.innerWidth / window.innerHeight) > 1){
			if( window.innerHeight >= 500){
				//console.log('Инициируем fullpage');
				fullpage_init();
			}
		}else{
			if( window.innerHeight >= 450){
				//alert(window.innerHeight);
				//console.log('Инициируем fullpage');
				fullpage_init();
			}
		}
	});
});

//Проверяем ширину экрана, чтобы обработать блоки до и после 760 пикселей
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


$(window).resize(function(e) {
	//alert(window.innerHeight);
	size_checker(function(){
		console.log('Перестраиваем fullpage');
		fullpage_api.reBuild();
	});
});


window.addEventListener("orientationchange", function() {
    // Перезагрузим страницу при изменении ориентации страницы
 	location.reload();
}, false);




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
		 licenseKey : 'OPEN-SOURCE-GPLV3-LICENSE',
			verticalCentered: false,
			lockAnchors : false,
			anchors : [ 'p1', 'p2', 'p3', 'p4', 'p5' ] ,
			//fitToSection : false,
			
			onLeave: function(origin, destination, direction){
				var leavingSection = this;
				if(origin.index == 0 && direction =='down'){ $('.logo').addClass('trans'); }
				else if(origin.index == 1 && direction == 'up'){ $('.logo').removeClass('trans');}
			}
	 });
}