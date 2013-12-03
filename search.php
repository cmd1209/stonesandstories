<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

<div class="col maincontent">
		<div class="col col100">
			<div class="module">
				<h1><strong><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="col col100">

						<div class="textwrap" style="min-height:800px;">
					 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<div class="col50">
								<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('large'); ?>
								</a>								
							</div>
							<div class="col50">
							 <div class="singletitle">
							   <h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
							<?php endif; ?>
									</h2>
								</div>
						
									<?php echo excerpt(35); ?>
								</div>
								
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