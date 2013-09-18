<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

        <div class="col col100">
          <div class="module">

			<div class="textwrap double categorylist">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            		<li class="nobreak">
            		<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<?php endif; ?>
					<?php echo excerpt(35); ?>
					<a href="<?php echo get_permalink(); ?>"> mehr...</a>
					<?php the_category(); ?>  
					<?php endwhile; ?>
					<?php endif; ?>
					</li>
			</div>

          </div>
        </div>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>