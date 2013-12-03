<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

<div class="col maincontent">
		<div class="col col100" style="min-height:800px;">
			<div class="module">
				<h1><strong><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="col col100">

					 <?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
						<?php endwhile; ?>
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