<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
wp_enqueue_script('packery', get_template_directory_uri().'/js/packery.js') ;
get_header(); // подключаем header.php ?> 

<script>
    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    var max_pages = '<?php echo $wp_query->max_num_pages; ?>';


function imgLoaded(img){
	$(img).css({opacity:1});
}

$(document).ready(function() {
    $('img').load(function(e) {
    	$(this).css({opacity:1});
	});
	
	$('.preladitem').css({opacity : 1, marginTop:0});

	var $grid = $('.grid').packery({
	  itemSelector: '.grid-item',
	  gutter: '.gutter-sizer',
	  percentPosition: true 
	});

	var windowHeight = $(window).height();
 	//console.log('window height '+$(window).height());
	var self = $('.more-bottom');
	var height = self.offset().top + self.height();
	
	
	if ($(document).scrollTop() + windowHeight >= height-100 && !$('body').hasClass('loading')) {
		var data = {
					'action': 'loadmore',
					'query': true_posts,
					'page' : current_page
				};
				load_more(data);
	}
	
	$(document).on('scroll', function() {
		if ($(document).scrollTop() + windowHeight >= height-100 && !$('body').hasClass('loading')) {
				var data = {
					'action': 'loadmore',
					'query': true_posts,
					'page' : current_page
				};
				load_more(data);
		}
	});
	
	
	function load_more(data){
		$.ajax({
			url:ajaxurl,
			data:data,
			type:'POST',
			beforeSend: function( xhr){
				$('body').addClass('loading');
			},
			success:function(data){
				if( data ) { 
					$('body').removeClass('loading');
					current_page++;
					var $items = $(data);
					$grid.append( $items ).packery( 'appended', $items );
					
					$('img').load(function(e) {
						$(this).css({opacity:1});
					});
				} else {
				   // $('#load_more_gs').remove();
				}
			}
		});
	}
});

</script>
    
<section>
	<div class="wrapper">
    	<div class="blog-container">
        
        <?php get_template_part('filter');  ?>
			<div class="blog grid preladitem" >

				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
                	<div class="gutter-sizer"></div>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<div class="empty"><p>There are no entries in this category.</p></div>'; endif; // если записей нет, напишим "простите" ?>	 
			</div>
            <div class="more-bottom"></div>
	</div>
    </div>
</section>

<?php get_footer(); // подключаем footer.php ?>