<?php get_header(); ?>

<div class="blog-section-container">
    <div class="container-14">
        <div class="blog-section-wrapper">
            <div class="blog-section-underwrapper">
                <h1>Search results for "<?php echo get_search_query(); ?>"</h1>
				<div class="search-bar"><?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
                
            </div>
        </div>
    </div>
</div>

<div class="all-blog-container">
    <div class="container-14">
        <div class="all-blog-wrapper">
            <div class="all-blog-underwrapper">

                <div class="blogs-and-categories-wrapper">
                    <div class="blog-categories">
                        <?php
                        $category_args = array(
                            'exclude' => get_cat_ID('Uncategorized'),
                        );

                        $categories = get_categories($category_args);

                        if (!empty($categories)) {
                            echo '<ul>';
                            foreach ($categories as $category) {
                                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '" class="' . (is_category($category->term_id) ? 'current-category' : '') . '">' . $category->name . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>
                    <div class="list-of-blogs-wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $search_query = get_search_query();

                        $search_results = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'paged' => $paged,
                            's' => $search_query,
                        ));

                        if ($search_results->have_posts()) {
                            while ($search_results->have_posts()) {
                                $search_results->the_post();
                                $blog_categories = get_the_category();
                                $post_id = get_the_ID();
                                ?>
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="single-blog-card-all">
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

                            // Paginacija za rezultate pretrage
                            if ($search_results->max_num_pages > 1) {
                                echo '<div class="pagination-wrapper">';
                                echo '<div class="pagination">';
                                echo paginate_links(array(
                                    'total' => $search_results->max_num_pages,
                                    'current' => max(1, $paged),
                                    'prev_text' => '<img src="/wp-content/uploads/2024/06/right-green-arrow.webp">',
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

<?php get_footer(); ?>


<script>
    var swiper = new Swiper(".mySwiper-blog", {
       spaceBetween:20,
       slidesPerView:3.5
    });


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
  </script>