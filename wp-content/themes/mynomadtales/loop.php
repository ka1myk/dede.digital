<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
 	 $color = get_field( 'bg_color'); 
	 $anons_img = get_field( 'anons_img'); 
	 $subtitle = get_field( 'subtitle'); 
	 $anons = get_field( 'anons'); 
	
	//echo '<pre>'; print_r( $anons_img); echo '</pre>';
	
	$h = $anons_img['height'] / ($anons_img['width'] / 360);
	
	$scale = min(360 / $anons_img['width'], 500 / $anons_img['height'] );

	if ($scale >= 1) {
		$height = $anons_img['height'];
	}else{
		$height = $anons_img['height'] * $scale;
	}
		

?>

	<div class="post-wrap grid-item  " >
	<a class="post-link " style="background-color:<?=$color?>" href="<?=the_permalink();?>">
    
     	
            <div class="anons-img-wrap" style=" height:<?=$height?>px"><div class="anons-img " image-data="<?=$anons_img['url'];?>"><img src="<?=$anons_img['url'];?>" onload="imgLoaded(this)"></div></div>
            <div class="anons-text">
    	 	<h2><?php the_title(); ?></h2>
    	 	<h3><?=$subtitle?></h3>
    	 	<p><?=$anons?></p>
            </div>
             
     </a>
	</div>
  
	