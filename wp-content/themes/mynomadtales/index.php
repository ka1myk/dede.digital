<? get_header(); // подключаем header.php ?> 
<section class="section  counter-sect" data-anchor="p1">
	<div class="wrapper">
    	<?php get_template_part('counter');  ?>
         <div class="img-title-wrapper show-760">
        	<div class="img-title-center"><div class="img-title"><a href="/book/" class="button r30 anim">Read more</a></div></div>
            <div class="img-title-after"><a href="#p2" class="scroll-icon" ></a> </div>
        </div>
     </div>
</section>    
<section class="section fp-auto-height hide-760"  data-anchor="p2">
		<div class="block-title">
         <div class="img-title-wrapper">
        	<div class="img-title"><a href="/book/" class="button r30 anim">Read more</a></div>
        </div>
		</div>
</section>
<section class="section  map-sect" data-anchor="p3">
        <div class="vmb-block  hide-760">
        	<div class="vmb-content">
            <div class="text">Love Reading<br>Interesting<br>Stories?</div>
            <a href="/category/blog/" class="button">Visit My Blog</a>
            </div>
        </div>	
        <div class="cont ph30 show-760"  data-anchor="p4">
        	<div class="map-container">
            <div class="years-wrap"><span><?=(date('Y') - 2008)?></span><span>Years</span><span>of travel experience</span></div>
            <?php  get_template_part('map/map');  ?>
            </div>
        </div>
</section>
<?php get_footer(); // подключаем footer.php ?>