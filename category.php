<?php get_header(); ?>

<!-- section -->
<section role="main">

	<div class="col maincontent">
		<div class="col col100">
			<div class="module">
				<h1><span><?php single_cat_title(); ?></span> Projekte</h1>
				<div class="col col50">

					<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

						<div class="textwrap underline">
							<div class="singletitle">
								<h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
									</h2>
								</div>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>">
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
									<?php echo excerpt(35); ?>
								</div>

							<?php endif; endwhile; else: ?>
							<div>Alternate content</div>
						<?php endif; ?>
					</div>
					<?php $i = 0; rewind_posts(); ?>
					<div class="col col50">
						<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

							<div class="underline textwrap">
								<div class="singletitle">
								<h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
									</h2>
								</div>
								<?php endif; ?>
								<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>">
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