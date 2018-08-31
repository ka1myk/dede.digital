/*************** overheight ****************/	

function content_overheight(elem){
	if($('#over-content').html() == ''){
		var content_id_array = $(elem).attr('content').split(' ');
		//console.log(content_id_array);
		var content = '';
	//	var content_html_array = {};
		content_id_array.forEach(function(item, i, arr) {
  	//		content_html_array[item] = $('#'+item).html();
			content += $('#'+item).html();
		});
		
		//var content = $('#'+content_id).html();
		var title_content = "";
		var title = $(elem).attr("title");
		if ( title !== undefined && title !== false){
			//console.log(title);
			title_content = '<div class="title">'+title+'</div>';
		}
		
		$('BODY').css({'position':'fixed', 'height':'100%', 'overflow':'hidden'});

		$('#over-container').css({'display':'block'}).animate({opacity:1}, 150);
		$('#over-content').html(title_content+content);
		
	
	}
}	
function content_overheight_close(){
	
	$('#over-container').animate({opacity:0}, 150,  function(){$('#over-container').css({'display':'none'})});
	$('BODY').css({'position':'static', 'height':'auto', 'overflow':'auto'});
	//$('#over-container').css({'opacity':0}).css({'display':'none'});
	$('#over-content').html('');
		
	var content_id = $('#over-content').attr('content');	
	$('#'+content_id).append($('#over-content>div'));
}

