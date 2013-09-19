<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

    <div class="col maincontent">
        <div class="col col100">
          <div class="module">
		<h1><?php single_cat_title(); ?></h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col col50">
<h1><?php the_permalink(); ?></h1>
<?php the_content(); ?>


</div>

<?php endwhile; else: ?>
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





