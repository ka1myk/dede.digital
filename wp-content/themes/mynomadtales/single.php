<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
 

get_header(); // подключаем header.php ?>
<section>
	<div class="page-container blog-page">
    
    <? 	//Получаем дополнительные поля страницы
		
		//Картинка банера десктопной версии
		$blog_page_banner = get_field('blog_page_banner'); 
			
		//echo '<pre>'; print_r( $blog_page_banner); echo '</pre>';

		//Опредляем заголовок статьи
		$h1 = get_the_title();
	  ?>
    <? if(!empty($blog_page_banner)) { ?>
    	<div class="blog-page-banner hide-600" style="background-image:url(<?=$blog_page_banner['sizes']['medium_large']?>)"></div>
    	<div class="blog-page-banner show-600" style="background-image:url(<?=$blog_page_banner['url']?>)"></div>
    <? } ?>
    
    <div class="page <?=(is_active_sidebar('true_side') ? 'have-sidebar' : '' ); ?>">
		<div class="article ">
            	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>> <?php // контэйнер с классами и id ?>
						<h1><?=$h1?></h1> 
						<?php the_content(); // контент ?>
					</article>
				<?php endwhile; // конец цикла ?>
                <div class="links">
                <?php previous_post_link('%link', '&larr; Previous<span>: %title </span>', TRUE); // ссылка на предыдущий пост ?> 
				<?php next_post_link('%link', 'Next<span>: %title </span> &rarr;', TRUE); // ссылка на следующий пост ?> 
                </div>
        </div>
                
        	<div class="sidebar right">
                <aside>
                    <?php dynamic_sidebar('true_side'); // подключаем sidebar.php ?>
                </aside>
            </div>
    </div>
    </div>
</section>
<?php get_footer(); // подключаем footer.php ?>
