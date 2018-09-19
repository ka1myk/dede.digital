<?php /* Template Name: page-contact */ ?>
<?php

get_header(); // подключаем header.php ?>
<section class="section-page">
	
    
    <? 	//Получаем дополнительные поля страницы
		
			//Картинка банера десктопной версии
			$banner = get_field('page_banner_desktop'); 
			
			//Картинка банера мобильной версии над текстом
			$banner_mob = get_field('page_banner_mobile');
			
			//Картинка банера мобильной версии под текстом
			$banner_mob_bottom = get_field('page_banner_mobile_bottom');
			
			//Альтернативный шзаголовок
			$alt_title = get_field('page_title');

		//Опредляем заголовок статьи
		$h1 = (!empty($alt_title)) ? $alt_title : get_the_title();
	  ?>
    <? if(!empty($banner)) { ?>
    	<div class="page-banner desktop fixed show-600" style="background-image:url(<?=$banner?>)"></div>
        <div class="page-banner mobile fixed hide-600" style="background-image:url(<?=$banner_mob?>)"></div>
    
    <? } ?>
    <div class="page-container ">
    <div class="page contact <?=(is_active_sidebar('true_side') ? 'have-sidebar' : '' ); ?>">
		<div class="article ">
            	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>> <?php // контэйнер с классами и id ?>
						<h1><?=$h1?></h1> 
						<div class="contact-content"><?php the_content(); // контент ?></div>
					</article>
				<?php endwhile; // конец цикла ?>
        </div>
        
    	<div class="page-banner mobile hide-600" ><img src="<?=$banner_mob_bottom?>"></div>
        
        	<div class="sidebar right">
                <aside>
                    <?php dynamic_sidebar('true_side'); // подключаем sidebar.php ?>
                </aside>
            </div>
    </div>
    </div>
</section>
<?php get_footer(); // подключаем footer.php ?>