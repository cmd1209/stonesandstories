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
<!-- <div class="glass">
    <img src="<?php echo get_template_directory_uri(); ?>/img/brokenglass.png" alt="glass">
  </div> -->
  
        <div class="masthead">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a> 
        </div>
        <div class="navigation">
          <div class="wmenu wrapper outline" role="navigation">
              <?php wp_nav_menu( array('menu' => 'Black' )); ?>
          </div>
          <div class="bmenu wrapper" role="navigation">
              <?php wp_nav_menu( array('menu' => 'White' )); ?>
          </div>
        </div>

    <div class="wrapper">
      <div id="overlay"></div>
<!--       <iframe class="filmplayer" width="800" height="450" src="//www.youtube.com/embed/KGsHXZjj04Q?rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe> -->


      <header class="header clear" role="banner">
        
        
<!--           <div class="atmosphere">
              <a href="#" class="filmbutton"><img src="http://img.youtube.com/vi/KGsHXZjj04Q/mqdefault.jpg" alt=""></a>
          </div> -->


        
      </header>
