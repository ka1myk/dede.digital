<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
 ?>

<? get_header(); // подключаем header.php ?> 
<section>


	<?php //get_template_part('slider');  ?>
    
    <div class="onslider-wrapper">
        		<?php get_template_part('counter');  ?>
		
        <div class="img-title-wrapper">
        	<div class="img-title"><a href="/book/" class="button r30 anim">Read more</a></div>
        	<a href="#EventMap" class="scroll-icon show-600" onclick="autof('EventMap'); return false;"></a> 
            
        </div>
    </div>


<div class="wrapper hide-600">
	<div class="vmb-block">
    	<div class="text">Love Reading<br>Interesting<br>Stories?</div>
        <a href="/category/blog/" class="button">Visit My Blog</a>
    </div>	
</div>    



<div class="cont ph30 show-600" id="EventMap">
<div class="wrapper">
	<div class="years-wrap"><span><?=(date('Y') - 2008)?></span><span>Years</span><span>of travel experience</span></div>
</div>    
            		<?php  get_template_part('map/map');  ?>

   
</div>



<?php //echo do_shortcode('[metaslider id="5"]'); ?>	
    
</section>
<?php get_footer(); // подключаем footer.php ?>