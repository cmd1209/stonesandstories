
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div id="footerinfo">
				<div class="col col40">
				           				<a href="<?php echo home_url(); ?>" style="border: none; width: 75%; margin: 0 0 40px 12px;">
				              				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-neg.svg" alt="Logo" class="logo-img">
				            			</a>

								</div>
								<div class="col col60">
									<div class="links">
										<?php wp_nav_menu( array('menu' => 'Footer' )); ?>
									</div>
								</div>
				</div>
					<p class="clear"></p>
				<div class="copyright">
					<p>&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?></p>
				</div>
			</footer>
		</div> <!-- end wrapper -->

		<?php wp_footer(); ?>
		
		<!-- analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10932812-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

      <script src="<?php echo get_template_directory_uri(); ?>/js/uisearch.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>

	</body>
</html>