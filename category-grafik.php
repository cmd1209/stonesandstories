<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

        <div class="col col100">
          <div class="module" style="background-color:black;">

			<div class="textwrap gdouble nobreak">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            		<li>
            		<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php
if (class_exists('MultiPostThumbnails')) :
	if ( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'secondary-image', NULL, 'secondary-image') ) :
		MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-image');
	else : ?>
		<?php the_post_thumbnail('large'); ?>
<?php
	endif;
endif;
?></a>
					<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>
					</li>
			</div>

          </div>
        </div>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>