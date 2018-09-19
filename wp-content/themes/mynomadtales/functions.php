<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage MyNomadTales
 */

//Отключаем админбар. Из-за фиксированного позиционирования некоректно работает с данным шаблоном
show_admin_bar( false );

add_theme_support('title-tag'); // теперь тайтл управляется самим вп

//Регистрируем меню
//========================================
register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'footer' => 'Внизу' // Внизу
));

//Регистрируем блоки для виджетов
//========================================
function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Боковая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => ''
		)
	);
	
	//В нижней части, над подвалом
	register_sidebar(
		array(
			'id' => 'bottom', // уникальный id
			'name' => 'Блок над подвалом', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '', 
			'after_title' => ''
		)
	);
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );


//Функция для ajax подгрузки записей блога при прокрутке
//=============================================================
function true_load_posts(){
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    $q = new WP_Query($args);

	if( $q->have_posts() ):
        while($q->have_posts()): $q->the_post(); 
			get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php 
		endwhile; 
	endif;
    	wp_reset_postdata();
    die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

?>
