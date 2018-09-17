<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/js/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/mynomadtales/css/style.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mynomadtales/overheight/overheight.css">
   
	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   <script src="<?=get_template_directory_uri()?>/js/jquery.fancybox.min.js"></script>
    <script src="/wp-content/themes/mynomadtales/overheight/overheight.js"> </script>
	<script src="/wp-content/themes/mynomadtales/js/main.js"></script>
	
    <? /* Скрипты только для главной страницы */  ?>
	<?	if(is_front_page()): ?>
    
    	<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/slider/jquery.slide.css">
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/map/map.css">
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/mynomadtales/countdown/jquery.countdown.css">
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/fullPage.js-master/src/fullpage.css">


		
		<script src="<?=get_template_directory_uri()?>/slider/jquery.slide.js"></script>
		<script src="<?=get_template_directory_uri()?>/countdown/jquery.countdown.js"> </script>
        <script src="<?=get_template_directory_uri()?>/slick/slick.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/map/map.js"></script>
        <script src="<?=get_template_directory_uri()?>/fullPage.js-master/src/fullpage.js"></script>

        
	<? endif;?>


	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>

<body>
	<? if(is_front_page()){  get_template_part('slider');  } ?>



    <header>
    	<div class="header">
       
    	<div class="fix <?=(is_front_page()) ? 'home': ''?>">
        <div class="wrapper">
        	<div class="logo anim"><a href="/" title=""></a></div>
        	<div class="mobile-menu-button hide-760"><a href="/" onclick="content_overheight(this); return false;" content="header-menu social-links"><span></span></a></div>
            <div class="header-menu-wrap show-760" id="header-menu">
            <?php
				wp_nav_menu([
					'container' => 'div',
					'container_class' => 'header-menu', //класс div блока
					'menu_class' => '', //класс меню
					'theme_location' => 'top'
			  	]);
 			?>
        	</div>
           </div> 
        </div>
		</div>
	</header>
   
   <div class="fullpage" id="fullpage"> 
   
    