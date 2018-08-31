<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
 ?>

<? get_header(); // подключаем header.php ?> 
<section>

<?php get_template_part('slider');  ?>


<?php //echo do_shortcode('[metaslider id="5"]'); ?>	
    
</section>
<?php get_footer(); // подключаем footer.php ?>