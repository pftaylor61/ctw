<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package ctw
 * @since ctw 0.0.1
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        
        <!--Include jQuery -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <!--Include the slidepanel plugin -->
        <script type="text/javascript" src="js/jquery.slidepanel.js"></script>
        <!--Add the css -->
        <link rel="stylesheet" type="text/css" href="css/jquery.slidepanel.css">
				

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed site">
    <div id="ocwsctw_inside_wrapper" class="ocwsctw_wrap">

	<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'ctw' ); ?>"><?php esc_html_e( 'Skip to main content', 'ctw' ); ?></a></div>

	<div id="headercontainer">

		<header id="masthead" class="site-header row" role="banner">
                        <div class="col grid_9_of_12">
				<div class="social-media-icons">
					<?php echo ctw_get_social_media(); ?>
				</div>
				
			</div> <!-- /.col.grid_7_of_12 -->
			<div class="col grid_10_of_12 site-title">
				<h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
						<?php 
						$headerImg = get_header_image();
						if( !empty( $headerImg ) ) { ?>
							<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /><?php echo get_bloginfo( 'name' ); ?>
						<?php } 
						else {
							echo get_bloginfo( 'name' );
						} ?>
					</a>
				</h1>
<<<<<<< HEAD
                            
=======
                            <p><?php echo get_bloginfo( 'description'); ?></p>
>>>>>>> origin/master
			</div> <!-- /.col.grid_5_of_12 -->

			
		</header> <!-- /#masthead.site-header.row -->

	</div> <!-- /#headercontainer -->
	<div id="bannercontainer">
		<div class="banner row">
<<<<<<< HEAD
                    <p class="inlinetype"><?php echo get_bloginfo( 'description'); ?></p>
=======
                    
>>>>>>> origin/master
			<nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'ctw' ); ?></h3>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'ctw' ); ?>"><?php esc_html_e( 'Skip to content', 'ctw' ); ?></a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav> <!-- /.site-navigation.main-navigation -->
		</div> <!-- /.banner.row -->
	</div> <!-- /#bannercontainer -->

	<div id="maincontentcontainer">
            <?php if ( is_front_page() ) {
                            // place the slider fom the ocws slider plugin
                            // the OCWS Slider plugin is a necessary plugin
                            echo ocwssl_function('ocwssl_function');
				
			} ?>
		<?php	do_action( 'ctw_before_woocommerce' ); ?>