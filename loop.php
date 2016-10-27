<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php $category = get_the_category();
	if($category[0]){ echo '<a class="triangle shadow" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; }
?>


		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<a class="startthumbnail" href="<?php echo get_permalink(); ?>">
				<?php if (is_single('4275')): ?>
				<?php echo get_the_post_thumbnail($large->ID, 'max');?></a>

				<?php else: ?>

				<?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
				<?php endif ?>

			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->


<?php if (is_single('3039')): ?>

<?php else: ?>
		<!-- post title -->
		<div class="moduleheader">
              <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
                 <span><?php the_field('subheadline'); ?></span></h2>
               <?php endif; ?>
             </div>
		<!-- /post title -->


	<div class="textwrap">
		<p><?php echo excerpt(70); ?> <a class="view-article" href="<?php echo get_permalink(); ?>">mehr…</a></p>

	</div>

<?php endif ?>





	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
