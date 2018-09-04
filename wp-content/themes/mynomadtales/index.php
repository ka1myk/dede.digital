<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
 ?>

<? get_header(); // подключаем header.php ?> 
<section>

<div class="slider-container">
	<?php get_template_part('slider');  ?>
    
    <div class="onslider-wrapper">
        		<?php get_template_part('counter');  ?>
		
        <div class="img-title-wrapper"><div class="img-title"><a href="#" class="button r30 anim">Read more</a></div></div>
    </div>
</div>

<div class="wrapper">
	<div class="years-wrap"><span><?=(date('Y') - 2008)?></span><span>Years</span><span>of travel experience</span></div>
</div>    
<?php //echo do_shortcode('[metaslider id="5"]'); ?>	
    
</section>
<?php get_footer(); // подключаем footer.php ?>