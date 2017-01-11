<!-- sidebar -->
<!-- <h2><span style="text-transform: uppercase; letter-spacing:0.2em;">Side</span></h2> -->
<?php if ( is_active_sidebar( 'side' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'side' ); ?>
	</div>
<?php endif; ?>

<!-- <h2 style="margin-top:10px;margin-bottom:10px;text-transform: uppercase; letter-spacing:0.2em; background-color: #e2f000;color:black;width:100%;">Tips</h2>

<?php if ( is_active_sidebar( 'tips' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'tips' ); ?>
	</div>
<?php endif; ?> -->

<!-- /sidebar -->
