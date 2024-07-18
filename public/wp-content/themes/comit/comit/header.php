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

	<script src="https://www.google.com/recaptcha/api.js"></script>
	<!-- RECAPTCHA V3 -->

	<!-- FONTS START -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	 <!-- FONTS END -->
	<!-- LIB FOR MOUSE SCROLL ON MAP START -->
	 <script src="https://unpkg.com/leaflet-mouseposition/Leaflet.MousePosition.min.js"></script>
	 <!-- LIB FOR MOUSE SCROLL ON MAP START -->

	 <!-- ANIME.JS LIB START -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>
	<!-- ANIME.JS LIB END -->

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
	 <!-- MOBILE HEADER START -->
<div class="mobile-heahder-wrapper">
		<header>
			<div class="header-items-wrapper">
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="mobile-logo" src="/wp-content/uploads/2024/06/vector.webp" ></a></div>
			<div class="btn-and-hamburger">
			<div class="header-contact-button"><a href="/kontakt/">Kontakt</a></div>
			<div id="open-dropdown-menu" class="hamburger-wrapper"><img class="hamburger-icon" src="/wp-content/uploads/2024/07/dropdown-icon.webp" ></div>
			</div>
			
			</div>
			
		</header>
</div>

<section id="under-wrapper" class="under-menu-wrapper">
	<div class="close-btn-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="dropdown-logo" src="/wp-content/uploads/2024/06/vector.webp" alt=""></a>
		<button id="close-mobile-menu-btn"><img src="/wp-content/uploads/2024/07/close-icon.webp" alt=""></button>
	</div>
	<div class="menu-and-geschaft-wrapper">
	<div><?php 
    wp_nav_menu( 
        array( 
            'theme_location' => 'menu-1'
        ) 
    ); 
?></div>
<div class="book-now-section">
<div class="book-now-section1">
	<div class="shop-image-mob">
		
	</div>
	<div class="shop-wrapper-mob">
	<p>Geschäft <br>in Neuchatel </p>
	<button id="neu-button" class="book-now-menu">Book now <img src="/wp-content/uploads/2024/06/vector_4.webp" alt=""></button>
	</div>
</div>
<div class="book-now-section1">
	<div class="shop-image-mob2">
		
	</div>
	<div class="shop-wrapper-mob">
	<p>Geschäft <br>in Müllheim </p>
	<button id="mull-button" class="book-now-menu">Book now <img src="/wp-content/uploads/2024/06/vector_4.webp" alt=""></button>
	</div>
</div>

</div>
	</div>



</section>
<!-- MOBILE HEADER END -->
	 </div>
	  <!-- HEADER MOBILE END -->
		</div>
			
	</div>
	


	<!-- OPEN CLOSE MOBILE MENU START -->
<script>
var openDropwdown =document.getElementById('open-dropdown-menu');
var closeDropdown = document.getElementById('close-mobile-menu-btn');
var underMenuWrapper =document.getElementById('under-wrapper');

openDropwdown.addEventListener('click', function(){
	underMenuWrapper.style.top = "0%";
});
closeDropdown.addEventListener('click', function(){
underMenuWrapper.style.top = "-220%";
});

var neuButton =document.getElementById('neu-button');
var mullButton = document.getElementById('mull-button');

neuButton.addEventListener('click', function(){
	window.open("https://www.click2date.eu/hoffmann-optik-neuenburg/appointment/start", "_blank");
});
mullButton.addEventListener('click', function(){
	window.open("https://www.click2date.eu/hoffmann-Optik-muellheim/appointment/start ", "_blank");
});
</script>
<!-- OPEN CLOSE MOBILE MENU END -->