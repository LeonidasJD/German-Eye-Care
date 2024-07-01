<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- FONTS START -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	 <!-- FONTS END -->
	<!-- LIB FOR MOUSE SCROLL ON MAP START -->
	 <script src="https://unpkg.com/leaflet-mouseposition/Leaflet.MousePosition.min.js"></script>
	 <!-- LIB FOR MOUSE SCROLL ON MAP START -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

	<!-- DESKTOP HEADER START -->
	<div class="container-header">
		<div class="container-14 ">
		<header id="masthead" class="site-header">
		<div class="header-wrapper">
			<div class="header-under-wrapper">
			<div><?php  wp_nav_menu( 
        array( 
            'theme_location' => 'menu-1'
        ) 
    );  ?></div>
		<div class="header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2024/06/vector.webp" alt=""></a></div>
		<div class="button-wrapper">
			
			<a class="button-type-2 contact-button" href="/kontakt/">Kontakt</a>
		</div>
			</div>
			<!-- <div class="horizontal-line"></div> -->
		
		</div>
		
	</header><!-- #masthead -->
	<!-- DESKTOP HEADER END -->


	 <!-- HEADER MOBILE START -->
	 <header class="mobile-header"> <p>mobile header placeholder</p></header>
	 </div>
	  <!-- HEADER MOBILE END -->
		</div>
			
	</div>
	
