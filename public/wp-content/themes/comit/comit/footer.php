<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comit
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-footer" 
		<?php if (is_page('vorteile') || is_singular('services') ){
			 echo 'style="background-color:white;padding-top: 50px"'; 
			 }else if(is_page('kontakt')){
				echo 'style="background-color: #F5F5F5"';
			 }
			  ?>>
			<div class="container-14">
				<div class="footer-wrapper">
					<div class="footer-under-wrapper">
						<div class="footer-nav-wrapper">
						<div class="logo-div-up"><img src="/wp-content/uploads/2024/06/vector-1.webp" ></div>
						<div class="footer-nav">
							<h2 class="footer-nav-title">Menü</h2>
							<?php wp_nav_menu(array(
								'theme_location' => 'menu-footer'
							)); ?>
						</div>
						<div class="footer-divider"></div>
						<div class="footer-nav"><h2 class="footer-nav-title">Rechtliches</h2>
						<ul>
							<li><a href="#">Imprint</a></li>
							<li><a href="#">Data protection</a></li>
						</ul>
						</div>
						<div class="footer-divider"></div>
						<div class="footer-nav"><h2 class="footer-nav-title">Standorte</h2>
							<ul><li><a href="mailto:info@germaneyecare.de">info@germaneyecare.de</a></li>
								<li><a href="tel:0763173606">07631-73606</a></li>
								<li><p>Rebstraße 4,</p></li>
								<li><p>79395 Neuenburg am Rhein</p></li>
							</ul>
						</div>
						<div class="footer-divider"></div>
						<div class="footer-nav"><h2 class="footer-nav-title">Sozialen Medien</h2>
						<ul class="social-ul"><li><a href="https://www.facebook.com/profile.php?id=100033324590454" target="_blank"><img src="/wp-content/uploads/2024/06/frame_4.webp" ></a></li>
						<li><a href="https://www.instagram.com/hoffmannoptik_markgraeflerland/" target="_blank"><img src="/wp-content/uploads/2024/06/frame_3.webp" ></a></li>
					</ul>
						</div>
						</div>
						
						<div class="copyright-logo-wrapper">
							<div class="copyright-div">
								<div class="copyright-content">
									<p>Copyright © 2024 Hoffmannoptik. All rights reserved.</p>
									<div class="footer-small-divider"></div>
									<a href="#">Privacy & Policy </a>
								</div>
							</div>
							<div class="logo-div-down"><img src="/wp-content/uploads/2024/06/vector-1.webp" ></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
