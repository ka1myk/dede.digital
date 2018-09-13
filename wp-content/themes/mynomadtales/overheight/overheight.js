/*************** overheight ****************/	

function content_overheight(elem){
	
	if($('#over-content').html() == ''){
		var content_id_array = $(elem).attr('content').split(' ');
		var content = '';
		content_id_array.forEach(function(item, i, arr) {
			content += $('#'+item).html();
		});
		$('#over-content').html(content);
	}
	
	$('.body-flex-container').fadeOut(150, function(){
		$('#over-container').fadeIn(150); 	
		});	

}	
function content_overheight_close(){
	

	$('#over-container').fadeOut(150, function(){
		$('.body-flex-container').fadeIn(150);	
		$('#over-content').html("");
		});
	

}

