<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

    <div class="col maincontent">
        <div class="col col100">
          <div class="module">
		<h1><?php single_cat_title(); ?></h1>


				<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

<div class="col col50 L">
<h1><?php the_permalink(); ?></h1>
<?php the_content(); ?>
</div>

<?php endif; endwhile; else: ?>
<div>Alternate content</div>
<?php endif; ?>

<?php $i = 0; rewind_posts(); ?>

<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

<div class="col col50 R">
<h1><?php the_permalink(); ?></h1>
<?php the_content(); ?>
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