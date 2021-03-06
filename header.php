<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//fonts.googleapis.com/css?family=Arimo:400italic,400,700italic,700" rel="stylesheet" type="text/css">
<<<<<<< HEAD
    <script src="https://use.fontawesome.com/75215c3005.js"></script>
=======
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <!-- <script src="https://use.fontawesome.com/75215c3005.js"></script> -->
>>>>>>> 2016-redesign

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
  <nav id="mobilenav">
    <?php wp_nav_menu( array('menu' => 'mobile' )); ?>
  </nav>

    <div class="wrapper">
        <div class="masthead">
            <a class="mobilenavtrigger" href="#mobilenav">&#9776;</a>
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a>
              <?php get_template_part('searchform'); ?>
        </div>
        <div class="navigation">
          <div class="bmenu" role="navigation">
              <?php wp_nav_menu( array('menu' => 'Black' )); ?>
          </div>
        </div>
