<?php /* Template Name: profile+potenzial */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent" role="main">

      <div class="col col100">
        <div class="module">
          <div class="textwrap categorysingle">
            <div class="singletitle">
              <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
                 <span><?php the_field('subheadline'); ?></span></h2>
                <?php endif; ?>
               </div>   

               <div class="factbox" style="margin-bottom: 30px;padding-left:0;" id="<?php the_title(); ?>">
                <ul class="post-categories facts" style="padding-left:0; overflow:hidden;">
                    <li><?php if( get_field('custom-links') ): ?> <?php the_field('custom-links'); ?></li><?php endif; ?>   
                  </ul>        
              </div>

            <div class="mega"><?php the_content(); ?></div>

          <div class="potenzial" style="background-color:black;color:white;">
            <?php if( get_field('potenzial') ): ?>
              <?php the_field('potenzial'); ?>
            <?php endif; ?>
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