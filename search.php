<?php get_header(); ?>

	<!-- section -->
	<section role="main">

<div class="maincontent">
		<div class="col col100" style="min-height:800px;">
			<div class="module">
				<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="col col50">

					<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

						<div class="textwrap">
							<div class="singletitle">
								<h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
							<?php endif; ?>
									</h2>
								</div>
							<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>">

									<?php the_post_thumbnail('large'); ?>
</a>
									<?php echo excerpt(35); ?>
								</div>

							<?php endif; endwhile; else: ?>
							<div>Alternate content</div>
						<?php endif; ?>
					</div>
					<?php $i = 0; rewind_posts(); ?>
					<div class="col col50">
						<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

							<div class="textwrap">
								<div class="singletitle">
								<h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
								<?php endif; ?>
									</h2>
								</div>
								<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('large'); ?>
								</a>
										<?php echo excerpt(35); ?>
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