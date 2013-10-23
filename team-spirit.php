<?php /* Template Name: Team-Spirit */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">    
      <div class="col col100">
        <div class="module">
          <div class="textwrap">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="col col100">
<?php get_page_children( $page_id=145, $pages )?>

<ul>
<?php while (have_posts()) : the_post(); ?>

<li>
<span class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>

<?php echo excerpt(20); ?>

</li>
  <?php endwhile; ?>
</ul>
      </div>



    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>