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
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/mynomadtales/css/style.css">

    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mynomadtales/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mynomadtales/overheight/overheight.css">
   
	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/wp-content/themes/mynomadtales/js/main.js"> </script>
    <script src="/wp-content/themes/mynomadtales/slick/slick.min.js"> </script>
    <script src="/wp-content/themes/mynomadtales/overheight/overheight.js"> </script>
     <script src="/wp-content/themes/mynomadtales/countdown/jquery.countdown.js"> </script>


	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>

<body>
	
    <div class="body-flex-container"> 
    <div class="body-flex-content">
    
	<header>
    	<div class="wrapper">
    	<div class="header">
        	<div class="logo"><a href="/" title=""></a></div>
            <div class="mobile-menu-button hide-600"><a href="/" onclick="content_overheight(this); return false;" content="header-menu social-links"><span></span></a></div>
            
            
           
            <div class="header-menu-wrap show-600" id="header-menu">
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
	</header>
    
   
    