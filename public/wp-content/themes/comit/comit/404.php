<?php
get_header();
?>
<div class="error-page-container">
	<div class="container-14">
		<div class="error-page-wrapper">
		<div class="error-page-underwrapper">
			<div class="error-image"><img src="/wp-content/uploads/2024/07/ooops-woman.webp" alt="ooops womani"></div>
			<div class="error-info">
			<h1>ooops!</h1>
			<h2>404 - PAGE NOT FOUND</h2>
			<p>The page you were looking for was moved or doesn’t exist.<br>Let’s get you back, or you can search for yourself.</p>
			<div class="button-and-search-wrapper">
				<div class="button-and-search-underwrapper">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class=""><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.46967 5.96967C0.176777 6.26256 0.176777 6.73744 0.46967 7.03033L5.24264 11.8033C5.53553 12.0962 6.01041 12.0962 6.3033 11.8033C6.59619 11.5104 6.59619 11.0355 6.3033 10.7426L2.06066 6.5L6.3033 2.25736C6.59619 1.96447 6.59619 1.48959 6.3033 1.1967C6.01041 0.903805 5.53553 0.903805 5.24264 1.1967L0.46967 5.96967ZM14 5.75L1 5.75L1 7.25L14 7.25L14 5.75Z" fill="#36641C"/>
</svg>
Return home</a>
				<p>or</p>
				<div class="search-bar search-404"><?php echo do_shortcode('[wd_asp id=3]'); ?></div>
				</div>
				
			</div>
			</div>

			
		</div>
		</div>
		
	</div>
</div>



<?php 


get_footer();
?>