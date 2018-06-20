<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PerroBueno
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Favicon -->
      <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
      <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
      <!-- Favicon -->

      <!-- Google Font -->
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
      <!--Google font End -->

      <!-- build:js /assets/scripts/Vendor.js -->
      <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/scripts/Vendor.js"></script>
      <!-- endbuild -->

	<?php wp_head(); ?>
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'perro-bueno' ); ?></a>
	
<!-- Social Nav Start -->
    <div class="social">
        <a href="https://www.facebook.com/perrobueno.es/" class="icon-facebook" target="_blank"></a>
        <a href="https://www.twitter.com/perrobueno_es" class="icon-twitter" target="_blank"></a>
        <a href="https://www.instagram.com/perrobueno.es/" class="icon-instagrem" target="_blank"></a>
    </div>
<!-- Social Nav End -->
	
<!-- Start Header -->
    <header class="site-header">
        <div class="container">
            <div class="site-header__logo">
                <!--<div class="icon--clear-view-escapes site-header__logo__graphic">Clear View Escapes</div>-->
                <a href="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/pb_logo.png" alt="" class="site-header__image"></a>
            </div>

            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__menu-content">
               <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'container' => 'nav',
                        'container_class' => 'primary-nav primary-nav--pull-right'
                    ));
                ?>
            </div>
        </div>  
    </header>
<!-- End Header -->