<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    
    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//fonts.googleapis.com/css?family=Arimo:400italic,400,700italic,700" rel="stylesheet" type="text/css">
   
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
      
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
    <nav id="mobilenav" class="mobilenav">
      <a href="#">Nav Links</a>

    </nav>
    <div class="wrapper">
      <a class="mobilenavtrigger" href="#mobilenav">Menu</a>
        <div class="masthead">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a> 
<!--           <div class="atmosphere">
            <a href="<?php echo get_permalink(127); ?>" class="filmbutton"><img src="<?php echo home_url(); ?>/wp-content/uploads/2013/11/videobutton.png" alt="youtube"></a>
          </div> -->
        </div>
        <div class="navigation">
          <div class="bmenu" role="navigation">
              <?php wp_nav_menu( array('menu' => 'Black' )); ?>
              <?php get_template_part('searchform'); ?>
          </div>
        </div>
