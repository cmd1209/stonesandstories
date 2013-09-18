<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

        <div class="col col100">
          <div class="module" style="background-color:black;">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            			<ul>
            				<li>
            			<a href="<?php the_permalink(); ?>" class="biglink"></a>
						<?php
if (class_exists('MultiPostThumbnails')) :
	if ( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'secondary-image', NULL, 'secondary-image') ) :
		MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-image');
	else : ?>
		<?php the_post_thumbnail('large'); ?>
<?php
	endif;
endif;
?>
</li>
</ul>
					<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>

          </div>
        </div>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>