<!-- sidebar -->
<h2><span style="text-transform: uppercase; letter-spacing:0.2em;">Side</span></h2>

<figure>
	<a class="thumbnail" href="http://www.backstein.com/de/objekte/offentliche-bauten-sport-und-freizeit/raum-fur-bildung/6_857.html" target="blank">
		<img src="<?php echo home_url(); ?>/wp-content/uploads/2014/01/Forum-Johanneum_Backstein-Magazin.jpg" alt="" >
	</a>
</figure>

<figure>
	<a class="thumbnail" href="http://www.junius-verlag.de/buecher/architektur-hamburg-jahrbuch-2013" target="blank">
		<img src="<?php echo home_url(); ?>/wp-content/uploads/2013/11/jahrbuch-2013.jpg" alt="" >
	</a>
</figure>

<figure class="option2">
	<a class="thumbnail" href="http://www.dah-bremerhaven.de/australien.php" target="blank">
		<img src="<?php echo home_url(); ?>/wp-content/uploads/2013/09/australian-poster.jpg" alt="" >
	</a>
</figure>

<figure class="option1">
	<a class="thumbnail" href="http://andreas-heller.de/wp-content/uploads/2013/12/www.waelderhaus.dearchitektier.de_.jpg" target="blank">
		<img src="<?php echo home_url(); ?>/wp-content/uploads/2013/10/architechtier.jpg" alt="" >
	</a>
</figure>

<h2 style="margin-top:25px;text-transform: uppercase; letter-spacing:0.2em; background-color: #e2f000;color:black;width:100%;">Our Tips</h2>


	<?php query_posts( array( 'category__in' => array(103), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
	<?php while (have_posts()) : the_post(); ?>
<div class="sideroller" style="position:relative;overflow:hidden;">
<figure style="z-index:20; position: absolute;height: 100%; background-color:black;" class="funclass">
	<a href="<?php the_field('custom-links'); ?>" target="blank" title="<?php the_title(); ?>" >
		<?php the_post_thumbnail('large'); ?>
	</a>
</figure>
	<div class="sidetext" style="background-color:black;color:white; width:95%;">
		<a class="sidelink" href="<?php the_field('custom-links');?> " target="blank"><h3><?php the_title(); ?></h3></a>
		<p><?php the_field('location'); ?><br>
    	<?php if( get_field('subheadline') ): ?>
			<p><?php the_field('subheadline'); ?><br>
		<?php endif; ?>
		<a class="sidelink" href="<?php the_field('custom-links'); ?>" target="blank" style="color:white;">mehr lesen …</a></p>
	</div>
</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>  
<!-- /sidebar -->