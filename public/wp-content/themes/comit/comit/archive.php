<?php

get_header();
?>
<!-- HERO AND SEARCH BAR SECTION START -->
<div class="blog-section-container">
    <div class="container-14">
        <div class="blog-section-wrapper">
            <div class="blog-section-underwrapper">
                <h1>Search out articles</h1>
                <p>Lorem ipsum dolor sit amet censectur. Adiscpising elit</p>
                <div class="search-bar"><?php echo do_shortcode('[wd_asp id=1]'); ?></div>
            </div>
        </div>
    </div>
</div>
<!-- HERO AND SEARCH BAR SECTION END -->

<!-- ALL BLOGS SECTION START -->
 <div class="all-blog-container">
    <div class="container-14">
        <div class="all-blog-wrapper">
            <div class="all-blog-underwrapper">

                <div class="blogs-and-categories-wrapper">
                    <div class="blog-categories">
                        <?php
                        $category_args = array(
                            'exlcude'=>get_cat_ID('Uncategorized'),
                        );
                        
                        $categories = get_categories( $category_args );

                        if (!empty( $categories )){
                            echo '<ul>';
                            foreach($categories as $category){
                            echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '" class="' . (is_category($category->term_id) ? 'current-category' : '') . '">' . $category->name . '</a></li>';

                                
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>
                    <!-- MOBILE BLOG CATEGORIES SWIPER START -->
                    <div class="mobile-blog-categories">
                    <div class="swiper mySwiper-blog">
    <div class="swiper-wrapper swiper-wrapper-blog">
    <?php
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo '<div class="swiper-slide swiper-slide-blog"><a href="' . esc_url(get_category_link($category->term_id)) . '" class="'. (is_category($category->term_id) ? 'current-category' : '').'">' . $category->name . '</a></div>';
                }
            }
            ?>
    </div>
  </div>
                    
                    </div>
                    <!-- MOBILE BLOG CATEGORIES SWIPER END -->
                    <div class="list-of-blogs-wrapper">
    <?php
    // Dobijanje ID-a najnovijeg posta na sajtu
    $latest_post_site = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'date',
    ));

    $newest_post_id_site = 0;
    if ($latest_post_site->have_posts()) {
        $latest_post_site->the_post();
        $newest_post_id_site = get_the_ID();
    }
    wp_reset_postdata();

    // Postavljanje osnovnih promenljivih za prikaz blogova
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $category_object = get_queried_object();
    $category_id = $category_object->term_id;

    // Dobijanje najnovijeg posta u trenutnoj kategoriji
    $latest_post_category = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'cat' => $category_id,
    ));

    $newest_post_id_category = 0;
    if ($latest_post_category->have_posts()) {
        $latest_post_category->the_post();
        $newest_post_id_category = get_the_ID();
    }
    wp_reset_postdata();

    // Query za dobijanje postova za trenutnu kategoriju
    $list_blog_args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'paged' => $paged,
        'cat' => $category_id,
    );

    $all_blog_posts = new WP_Query($list_blog_args);

    if ($all_blog_posts->have_posts()) {
        while ($all_blog_posts->have_posts()) {
            $all_blog_posts->the_post();
            $blog_categories = get_the_category();
            $post_id = get_the_ID();
            $is_newest_post_in_category = ($post_id == $newest_post_id_site || $post_id == $newest_post_id_category) ? ' newest-post' : '';
            ?>
            <a href="<?php echo get_permalink(); ?>">
                <div class="single-blog-card-all<?php echo $is_newest_post_in_category; ?>">
                    <div class="post-image-all">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <p class="category-name-banner"><?php if (!empty($blog_categories)) {
                                echo esc_html($blog_categories[1]->name);
                            } ?></p>
                    </div>

                    <div class="post-info-all">
                        <p><img src="/wp-content/uploads/2024/06/clock-icon.webp"> <?php echo get_the_date(); ?></p>
                        <h2><?php the_title(); ?></h2>
                        <h3><?php echo get_the_excerpt(); ?></h3>
                        <div class="read-more-blog-btn"><p>Read more</p></div>
                    </div>
                </div>
            </a>
            <?php
        }

        // Paginacija
        if ($all_blog_posts->max_num_pages > 1) {
            echo '<div class="pagination-wrapper">';
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $all_blog_posts->max_num_pages,
                'current' => max(1, $paged),
                'prev_text' => ($paged > 1) ? '<img src="/wp-content/uploads/2024/06/right-green-arrow.webp">' : '<img src="/wp-content/uploads/2024/06/left-green-arrow.webp">',
                'next_text' => '<img src="/wp-content/uploads/2024/06/left-green-arrow.webp">',
                'show_all' => true,
            ));
            echo '</div>';
            echo '</div>';
        }

        wp_reset_postdata();
    } else {
        echo "No posts found";
    }
    ?>
</div>


                </div>
                <div class="latest-news-and-banner-wrapper">
					<?php get_template_part('/template-parts/latest-news','latest-news'); ?>
				</div>
            </div>
        </div>
    </div>
 </div>
 <!-- ALL BLOGS SECTION END -->

  <!-- MOBILE SIDE BANNER START -->
<?php get_template_part('template-parts/mobile-side-banner') ?>
<!-- MOBILE SIDE BANNER END -->
<?php
get_footer();
?>

<!-- CATEGORY SWIPER START -->
 <script>
    var swiper = new Swiper(".mySwiper-blog", {
       spaceBetween:20,
       slidesPerView:3.5
    });
// <!-- CATEGORY SWIPER END -->

// BLOGS AND AKUTELEE THEMEN ANIMATION START
    document.addEventListener('DOMContentLoaded', (event) => {
        anime({
            targets: '.blogs-and-categories-wrapper',
            left: '0%',  
            duration: 2000,  
            easing: 'easeOutExpo'  
        });
        anime({
            targets: '.latest-news-and-banner-wrapper',
            right: '0%',  
            duration: 2000,  
            easing: 'easeOutExpo' 
        });
    });
    // BLOGS AND AKUTELEE THEMEN ANIMATION END


    // CATEGORY BUTTON ANIMATION START
    document.querySelectorAll('.blog-categories ul li').forEach(link => {
        link.addEventListener('mouseenter', () => {
            // Prvo podizanje za 10px
            anime({
                targets: link,
                translateY: -10,
                easing: 'easeOutQuad',
                duration: 300,
               
            });
        });

        link.addEventListener('mouseleave', () => {
            anime.remove(link); // Remove the animation when mouse leaves
            anime({
                targets: link,
                translateY: 0,
                easing: 'easeOutQuad',
                duration: 300
            });
        });
    });
    // CATEGORY BUTTON ANIMATION END 
  </script>
  
