<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

    <div class="col maincontent">
        <div class="col col100">
          <div class="module">
			<h1><?php single_cat_title(); ?></h1>

			<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

				<div class="col col50 textwrap underline">
					<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<?php echo excerpt(35); ?>
					<a href="<?php echo get_permalink(); ?>"> mehr...</a>
					<?php the_date('Y', '<p>', '</p>'); ?>
					<?php the_category(); ?>  
				</div>

			<?php endif; endwhile; else: ?>
			<div>Alternate content</div>
		<?php endif; ?>

		<?php $i = 0; rewind_posts(); ?>

		<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

			<div class="col col50 underline textwrap">
				<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
				<?php echo excerpt(35); ?>
				<a href="<?php echo get_permalink(); ?>"> mehr...</a>
				<?php the_date('Y', '<p>', '</p>'); ?>
				<?php the_category(); ?>  
			</div>

		<?php endif; endwhile; else: ?>
		<div>Alternate content</div>
	<?php endif; ?>

          </div>
        </div>

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>


