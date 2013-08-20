			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="col col40">
           				<a href="<?php echo home_url(); ?>" style="border: none; width: 75%; margin: 0 0 40px 12px;">
              				<img src="<?php echo get_template_directory_uri(); ?>/img/footerlogo.svg" alt="Logo" class="logo-img">
            			</a>
					<?php get_template_part('searchform'); ?>
					<p class="copyright">
						&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>
					</p>
				</div>
				<div class="col col60">
					<div class="links">		
						<?php wp_nav_menu( array('menu' => 'Footer' )); ?>
					</div>
					<p class="clear"></p>
				</div>
				
			</footer>

		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>
	
	</body>
</html>