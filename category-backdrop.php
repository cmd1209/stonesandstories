<?php get_header(); ?>

<!-- section -->
<section role="main">

	<div class="col maincontent">
		<div class="col col100">
			<div class="module">
				<h1><span><?php single_cat_title(); ?></span> Narrative & Contextual</h1>
				<div class="col col50">

					<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

						<div class="textwrap underline">
							<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php if( get_field('subheadline') ): ?>
								<h3><?php the_field('subheadline'); ?></h3>
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
								<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php if( get_field('subheadline') ): ?>
									<h3><?php the_field('subheadline'); ?></h3>
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