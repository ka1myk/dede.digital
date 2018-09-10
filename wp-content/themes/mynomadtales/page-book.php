<?php /* Template Name: page-book */ ?>
<?php

get_header(); // подключаем header.php ?>
<section>
	<div class="page-container">
    
    <? 	//Получаем дополнительные поля страницы
		
			//Картинка банера десктопной версии
			$banner = get_field('page_banner_desktop'); 
			
			//Картинка банера мобильной версии над текстом
			$banner_mob = get_field('page_banner_mobile');
			
			//Альтернативный заголовок
			$alt_title = get_field('page_title');

		//Опредляем заголовок статьи
		$h1 = (!empty($alt_title)) ? $alt_title : get_the_title();
	  ?>
    <? if(!empty($banner)) { ?>
    	<div class="page-banner-desktop show-600"><img src="<?=$banner?>" /></div>
        <div class="page-banner-mobile hide-600"><img src="<?=$banner_mob?>" /></div>
    
    <? } ?>
    
    <div class="page buy-book">
		<div class="article ">
    	
            	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>> <?php // контэйнер с классами и id ?>
						<div class="sidebar show-600">
                            <aside>
                                <div class="vidjet book">
                                    <img src="/wp-content/uploads/2018/09/book-banner-mob.jpg" title="LAIKS IET - Book">
                                    <a class="buy-button anim" href="https://www.amazon.co.uk/Its-Time-Tales-Nomad-Soul/dp/993487105X/ref=mp_s_a_1_1/261-0389080-9800365?ie=UTF8&qid=1536103647&sr=1-1&refinements=p_27%3ARay+Gudrups&pi=AC_SX236_SY340_FMwebp_QL65&dpPl=1&dpID=51kyxf6%2B-zL&ref=plSrch#" target="_blank">BUY NOW</a>	
                                </div>    
                            </aside>
                        </div>
                        
                        <h1 class="book-title"><?=$h1?></h1> 
                        <a class="buy-button anim hide-600" href="https://www.amazon.co.uk/Its-Time-Tales-Nomad-Soul/dp/993487105X/ref=mp_s_a_1_1/261-0389080-9800365?ie=UTF8&qid=1536103647&sr=1-1&refinements=p_27%3ARay+Gudrups&pi=AC_SX236_SY340_FMwebp_QL65&dpPl=1&dpID=51kyxf6%2B-zL&ref=plSrch#" target="_blank">BUY NOW</a>
						<?php the_content(); // контент ?>
                        <a class="buy-button anim hide-600" href="https://www.amazon.co.uk/Its-Time-Tales-Nomad-Soul/dp/993487105X/ref=mp_s_a_1_1/261-0389080-9800365?ie=UTF8&qid=1536103647&sr=1-1&refinements=p_27%3ARay+Gudrups&pi=AC_SX236_SY340_FMwebp_QL65&dpPl=1&dpID=51kyxf6%2B-zL&ref=plSrch#" target="_blank">BUY NOW</a>
					</article>
				<?php endwhile; // конец цикла ?>
        </div>
        
       
        	
    </div>
    
    
   
   
   
    </div>
</section>
<?php get_footer(); // подключаем footer.php ?>