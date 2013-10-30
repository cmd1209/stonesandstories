<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

        <div class="col col100">
          <div class="module" style="background-color:black;padding-top:20px;">

          <div class="col col50">

					<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

						<div class="textwrap ">

							<li>
	<a href="<?php the_permalink(); ?>" class="biglink thumbnail">
	<?php if (class_exists('MultiPostThumbnails')) :
          						if ( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'secondary-image', NULL, 'secondary-image') ) :
          							MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-image');
          						else : ?>
          						<?php the_post_thumbnail('large'); ?>
          					<?php endif; endif; ?>
	</a>
</li>
		
						</div>

					<?php endif; endwhile; else: ?>
					<div>Alternate content</div>
				<?php endif; ?>
			</div>
			<?php $i = 0; rewind_posts(); ?>
			<div class="col col50">
				<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

					<div class="textwrap">
		

						<li>
	<a href="<?php the_permalink(); ?>" class="biglink thumbnail">
	<?php if (class_exists('MultiPostThumbnails')) :
          						if ( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'secondary-image', NULL, 'secondary-image') ) :
          							MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-image');
          						else : ?>
          						<?php the_post_thumbnail('large'); ?>
          					<?php endif; endif; ?>
	</a>
</li>

					</div>

				<?php endif; endwhile; else: ?>
				<div>Alternate content</div>
			<?php endif; ?>
		</div>

          </div>
        </div>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>