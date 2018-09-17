 <? 
	//Получаем картинки для слайдера
	$avatar = get_field('avatar', 47);
	$adventure_name = get_field('adventure_name', 47);
	$adventure_start_time = get_field('adventure_start_time', 47);
	$pdf_file = get_field('pdf_file', 47);
	
	
	//echo '<pre>'; print_r($pdf_file); echo '</pre>'; ?>
	
   
 
    <div class="counter-wrapper">
        <div class="counter">	
        	<a href="/contacts/" class="avatar-block" >
            	<span class="avatar" style="background-image:url(<?=$avatar?>)"></span>
                <p class="title"><span>TRAVEL</span><span>With Me</span></p>
                </a>
           <a href="/contacts/"> <div class="next">NEXT ADVENTURE</div></a>
            <div class="adventure_name">
            	<a data-fancybox data-type="iframe" data-src="<?=$pdf_file?>" href="javascript:;"><?=$adventure_name?></a></div> 
            
            <div id="countdown"></div>
            <div class="countdown-desc"><span>Days</span><span>Hrs</span><span>Mins</span><span>Secs</span></div>
			
        </div>
    </div>
    
  
<script>
$(function(){
	$('#countdown').countdown({
		timestamp	: <?=strtotime($adventure_start_time)*1000;?>,
		callback	: function(days, hours, minutes, seconds){
		}
	});
	
});
</script>

            	
