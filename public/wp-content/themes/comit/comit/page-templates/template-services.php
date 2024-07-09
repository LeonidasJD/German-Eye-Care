<?php
// Template Name:Services
get_header();
?>
<!-- SERVICE HERO SECTION START -->
<div class="services-hero-container">
    <div class="container-14">
        <div class="services-hero-wrapper">
            <div class="services-hero-underwrapper">
                <h1>Lorem ipsum dolor sit amet consectetur. Varius sed. Varius sed.</h1>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE HERO SECTION END -->

<!-- LIST OF SERVICE SECTION START -->
 <div class="services-container">
    <div class="container-14">
        <div class="all-services-wrapper">
            <div class="all-services-underwrapper">
                <div class="all-services-card-wrapper">
                <?php 
        $services_card_args= array(
            'post_type' =>'services',
            'posts_per_page' =>'-1'
        );

        $services = new WP_Query( $services_card_args );

        if($services->have_posts()){
            while($services->have_posts()){
                $services->the_post();
                ?> 
                
                <div class="single-service-card-all">
                <a href="<?php echo get_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="service-card-info-all">
                    <h2><?php echo get_the_title(); ?></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <div class="service-button-all"><a href="<?php echo get_permalink(); ?>">Mehr über</a>
                </div>
                    
                    </div>
                    </a>
                </div>
                
               
                <?php
            }
        }else{
            'Services not found!';
        }
        ?>
                </div>

            </div>
        </div>
    </div>
 </div>
 <!-- LIST OF SERVICE SECTION END -->

 <!-- MOBILE SIDE BANNER START -->
<?php get_template_part('template-parts/mobile-side-banner') ?>
<!-- MOBILE SIDE BANNER END -->
<?php
get_footer();
?>

<script>
    document.addEventListener('DOMContentLoaded', () => {

anime({
    targets: '.single-service-card-all',
    opacity: [0, 1],
    translateY: [20, 0],
    delay: anime.stagger(100), // Kašnjenje od 500ms za svaki sledeći element
    duration: 1000,
    easing: 'easeOutQuad'
  });

});
</script>