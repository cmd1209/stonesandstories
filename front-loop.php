<?php $my_query = new WP_Query('category_name=featured&showposts=3'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <!-- Do special_cat stuff... -->
<?php endwhile; ?>