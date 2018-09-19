<section class="section fp-auto-height">
	<?php dynamic_sidebar('bottom'); // подключаем sidebar.php ?>
</section>
<section class="section fp-auto-height"  data-anchor="p5">
    
    <footer>
    	<div class="wrapper">
		<div class="footer">
        
        	<div class="f-col">
                <h3>MyNomadTales</h3>
                <p style="padding-top:18px;"><span class="nowrap">It's Time to Reconnect to the Person</span> You Were Born to Be... <br>
                the Person You CHOSE to Be!</p>
                <div class="f-row"><p class="email contact"><a href="mailto:my_nomad_tales@gmail.com"><span class="show-600 ico-sprite em"></span>my_nomad_tales@gmail.com</a></p></div>
                <div class="f-row"><p class="contact phone"><a href="tel:+37129683249"><span class="show-600 ico-sprite ph"></span>+371 29 683 249</a></p></div>
            </div>
            
            <div class="f-col">
            	<div class="f-row">
                   <h3>ORDER MY BOOK</h3>
                    <p><a href="/book/" title="Its Time">“Its Time”</a></p>
                </div>
        		
                <div class="f-row">
        	   		<h3>TRAVEL WITH ME</h3>
        			<p><a href="/contacts/" title="Read more...">Read more...</a></p>
        		</div>
            </div>
            
            <div class="f-col">
       	   		<h3>FOLLOW ME</h3>
       			<div class="social-links-wrap" id="social-links">
                   	<div class="social-links">
                       	<a class="ico-sprite social-ico fb" href="https://www.facebook.com/RayGudrups/" target="_blank" title="Facebook"></a>
                       	<a class="ico-sprite social-ico in" href="https://www.instagram.com/my_nomad_tales/" target="_blank" title="Instagram"></a>
                       	<a class="ico-sprite social-ico yt" href="https://www.youtube.com/user/ViensPatsMeksika" target="_blank" title="YouTube"></a>
                   	</div>
                </div>
        	</div>
                
            <div class="f-col show-760">
        	   		<h3>MENU</h3>
        			 <?php
						wp_nav_menu([
							'container' => 'div',
							'container_class' => 'footer-menu', //класс div блока
							'menu_class' => '', //класс меню
							'theme_location' => 'footer'
						]);
					?>
        	</div>        
        </div>
        </div>	
	</footer>
</section>    

</div> <!-- end fullpage -->

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
 <!-- Mobile menu container -->
    <div class="over-container anim" id="over-container">
    	<div id="overheight" class="overheight-close anim" onclick="content_overheight_close()"></div>
        <div class="over-content" id="over-content"></div>
    </div>
    <!-- end -- Mobile menu cobtainer -->  
 
<script src="<?=get_template_directory_uri()?>/js/jquery.fancybox.min.js"></script>
<? if(is_front_page()){ ?> 
<script src="<?=get_template_directory_uri()?>/js/fullpage-custom.js"></script>
<? } ?>
</body>
</html>