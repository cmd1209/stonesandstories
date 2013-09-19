<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

    <div class="col maincontent">
        <div class="col col100">
          <div class="module">
		<h1><?php single_cat_title(); ?></h1>

			<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="col col50 L">
        <div class="textwrap">
        <?php
            $count++;

            if( $count % 2 ) {
            }
            else {
        ?>
                <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<?php endif; ?>
					<?php echo excerpt(35); ?>
					<a href="<?php echo get_permalink(); ?>"> mehr...</a>
					<?php the_category(); ?> 
        <?php
            }
        ?>
        </div>
        </div>

        <div class="col col50 L">
        	<div class="textwrap">
        <?php
            $count++;
            if( $count % 2 ) {
        ?>
                <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<?php endif; ?>
					<?php echo excerpt(35); ?>
					<a href="<?php echo get_permalink(); ?>"> mehr...</a>
					<?php the_category(); ?> 
        <?php
            }
        ?>
        </div>
        </div>

    <?php endwhile; ?>

<?php else : ?>

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





	
		<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<?php endif; ?>
					<?php echo excerpt(35); ?>
					<a href="<?php echo get_permalink(); ?>"> mehr...</a>
					<?php the_category(); ?> 
