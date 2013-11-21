<?php get_header(); ?>
<section role="main">

	<div class="col maincontent">
		<div class="col col100">
			<div class="module">
					<h1><strong><?php single_cat_title(); ?></strong></h1>
				<div class="col col50">

					<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

						<div class="textwrap ">
														<div class="singletitle">
								<h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
									</h2>
								</div> 
                 			 <?php endif; ?>
							<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
							<?php echo excerpt(35); ?>
						</div>

					<?php endif; endwhile; else: ?>
					<div>Alternate content</div>
				<?php endif; ?>
			</div>
			<?php $i = 0; rewind_posts(); ?>
			<div class="col col50">
				<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

					<div class=" textwrap">
													<div class="singletitle">
								<h2><?php the_title(); ?>
									<?php if( get_field('subheadline') ): ?>
										<span><?php the_field('subheadline'); ?></span>
									</h2>
								</div> 
                  		<?php endif; ?>
						<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
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
<?php get_footer(); ?>


