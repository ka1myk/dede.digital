
$(document).ready(function(e) {
	
	$('.mmap svg .mapsvg-marker').on('click', function(){
		var region = $(this).attr('id');
		popup_close( region, function(elem){
			  $('.popup-wraper.'+region).fadeIn(300);
		});
	});
	
	$('.mmap svg .mapsvg-marker').on('mouseover', function(){
		var region = $(this).attr('id');
		popup_close( region, function(elem){
			  $('.popup-wraper.'+region).fadeIn(300);
			  
		});
	});
	
	$('.mmap svg .link').on('click', function(){
		var id = $(this).attr('id');
		if(id == 'asia'){ window.location="/category/blog/region/asia/"; }
		if(id == 'europe'){ window.location="/category/blog/region/europe/"; }
		if(id == 'africa'){ window.location="/category/blog/region/africa/"; }
		if(id == 'australia'){ window.location="/category/blog/region/australia/"; }
		if(id == 'namerica'){ window.location="/category/blog/region/north-america/"; }
		if(id == 'samerica'){ window.location="/category/blog/region/south-america/"; }
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