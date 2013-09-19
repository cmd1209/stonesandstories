<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

    <div class="col maincontent">
        <div class="col col100">
          <div class="module">
			<h1><?php single_cat_title(); ?></h1>
			<div class="col col50 L">

			<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

				<div class="textwrap underline">
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
		<?php $i = 0; rewind_posts(); ?>
		<div class="col col50 R">
		<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>
			
			<div class="underline textwrap">
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

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>


