<?php get_header(); ?>

<!-- section -->
<section role="main">

	<div class="col maincontent">
		<div class="col col100">
			<div class="module">
				<h1 style="margin-bottom:0;"><span><?php single_cat_title(); ?></span> Projekte</h1>
				<div class="col col50" style="background-color:#ecece6;">

					<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

						<div class="textwrap " style="margin-bottom:50px;">
							<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php if( get_field('subheadline') ): ?>
                    			<h3><?php the_field('subheadline'); ?></h3>
                 			 <?php endif; ?>
							<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
						</div>

					<?php endif; endwhile; else: ?>
					<div>Alternate content</div>
				<?php endif; ?>
			</div>
			<?php $i = 0; rewind_posts(); ?>
			<div class="col col50" style="background-color:#ecece6;">
				<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

					<div class=" textwrap" style="margin-bottom:50px;">
						<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php if( get_field('subheadline') ): ?>
                    		<h3><?php the_field('subheadline'); ?></h3>
                  		<?php endif; ?>
						<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
					</div>

				<?php endif; endwhile; else: ?>
				<div>Alternate content</div>
			<?php endif; ?>
		</div>
	</div>
</div>

</div>
<div class="sidebar">
	<?php get_sidebar(); ?>
</div>

</section>
<!-- /section -->


<?php get_footer(); ?>

