<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    
    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
      
    <!-- css + javascript -->
    <?php wp_head(); ?>
    <script>
    !function(){
      // configure legacy, retina, touch requirements @ conditionizr.com
      conditionizr()
    }()
    </script>
  </head>
  <body <?php body_class(); ?>>



      <div id="overlay">
        <div class="glass">
          <img src="<?php echo get_template_directory_uri(); ?>/img/brokenglass.png" alt="glass">
        </div> 
      </div>

        <div class="masthead">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a> 
          <div class="atmosphere">
            <a href="#" class="filmbutton"><img src="http://img.youtube.com/vi/KGsHXZjj04Q/mqdefault.jpg" alt=""></a>
          </div>
        </div>
        <div class="navigation">
          <div class="wmenu wrapper outline" role="navigation">
            <?php get_template_part('searchform'); ?>
                <div class="stickylogo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
                </div>
              <?php wp_nav_menu( array('menu' => 'Black' )); ?>
          </div>
          <div class="bmenu wrapper" role="navigation">
              <?php wp_nav_menu( array('menu' => 'White' )); ?>
          </div>
        </div>

    <div class="wrapper">

    <object id="ytplayer" style="height: 800px; width: 450px">
      <param name="movie" value="http://www.youtube.com/embed/KGsHXZjj04Q?rel=0&showinfo=0&controls=0">
      <param name="allowScriptAccess" value="always">
      <embed id="ytplayer" src="http://www.youtube.com/embed/KGsHXZjj04Q?rel=0&showinfo=0&controls=0" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="800" height="450">
    </object>
  
      

