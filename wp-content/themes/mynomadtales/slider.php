 
 <? 
	//Получаем картинки для слайдера
	$slider_fields = get_fields(12);
	
	//Проходим по картинкам циклом и генерируем html код слайдера
	if(is_array($slider_fields) and count($slider_fields) > 0){ 
		?>
        <div class="slider" id="slider">
        <? foreach($slider_fields as $img_src) { 
			if(empty($img_src)) continue;
			?>
        	<div class="slide-img" style="background-image:url(<?=$img_src;?>)"></div>
        
        <? } ?>
       </div>
        <script>
 			$(".slider").slick({
				autoplaySpeed : 5000,
				speed : 1500,
				adaptiveHeight: true,
				autoplay:true,
				arrows: false,
				fade: true,
				height: '100%'
				});
 		</script>	

    <? } ?>
	
	<? //echo '<pre>'; print_r($slider_fields); echo '</pre>'; ?>