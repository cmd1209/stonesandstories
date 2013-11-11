<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    
    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    
    <link href="//fonts.googleapis.com/css?family=Source+Sans Pro:200italic,200,300italic,300,400italic,400,600italic,600,700italic,700,900italic,900" rel="stylesheet" type="text/css">

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

        <div class="masthead">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a> 
          <div class="atmosphere">
            <a href="<?php echo get_permalink(127); ?>" class="filmbutton"><img src="http://img.youtube.com/vi/KGsHXZjj04Q/mqdefault.jpg" alt=""></a>
          </div>
        </div>
        <div class="navigation">

          <div class="bmenu wrapper" role="navigation">
              <?php wp_nav_menu( array('menu' => 'Black' )); ?>
              <?php get_template_part('searchform'); ?>
          </div>
        </div>
      <div class="wrapper" id="stage">
  
      
<!-- -                <div class="stickylogo">
-                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
-                </div> -->