<?php /* Template Name: imprint */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="maincontent" role="main">
      <div class="col col100">
        <div class="module">
                <h1><strong><?php the_title(); ?></strong></h1>
        <div class="textwrap">


             <h2><?php if( get_field('subheadline') ): ?><?php the_field('subheadline'); ?>
               <?php endif; ?>
             </h2>

            <div class="col col50">
            <?php if( get_field('left') ): ?>
              <?php the_field('left'); ?>
            <?php endif; ?>
            </div>

          <div class="col col50">
            <?php if( get_field('right') ): ?>
              <?php the_field('right'); ?>
            <?php endif; ?>
          </div>

           <div class="col100">
                         <?php the_content(); ?>
           </div>

        </div>
        </div>
      </div>
    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>