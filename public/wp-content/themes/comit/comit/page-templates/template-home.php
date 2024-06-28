<?php 
//Template Name: Home
get_header();
?>
<!-- HERO SECTION START -->
 <div class="hero-container">
    <div class="container-14">
        <section class="hero-section-wrapper">
            <div class="hero-section-underwrapper">
                <h1>GermanEyeCare:<br>
                Kompetenz für Sie!</h1>
            </div>
        </section>
    </div>
 </div>
  <!-- HERO SECTION END -->

  <!-- TEXT AND FORM SECTION START -->
 <div class="text-and-form-container">
    <div class="container-14">
        <section class="text-and-form-wrapper">
            <div class="text-and-form-underwrapper">
                <div class="main-text">
                    <h2>Was passiert, wenn sich das <br> Sehen verschlechtert?</h2>
                    <p>In solchen Fällen sind eine genaue Ursachenforschung, Therapie und fokussierte Versorgung notwendig. Das gelingt am besten mit einem Team von Spezialisten, die ihr Handwerk dank breit gefächerter Ausbildung, jahrelanger Erfahrungen und Empathie bestens beherrschen.</p>
                    <p>Das Augenfürsorge-Netzwerk "GermanEyeCare" ist entstanden, um genau diese fachübergreifende Zusammenarbeit für Ihre Augen und Augengesundheit entstehen zulassen und somit einen nachhaltigen und wirksamen Beitrag zur Augengesundheit zu leisten.</p>
                    <p>Bei uns können Sie sich nicht nur einen Überblick zum Thema Auge und Gesundheit verschaffen, sondern sich auch jederzeit an unsere Experten wenden, sollten Sie weitere Fragen haben. Wir beraten Sie gern und bieten Ihnen eine perfekt auf Sie zugeschnittene Versorgung. Ein optimal aufeinander abgestimmtes Expertenteam wartet auf Sie.</p>
                    <p>Rufen Sie noch heute an oder kontaktieren Sie uns per <a href="#">E-Mail</a> oder Kontaktformular.Wir machen Ihre Augen zu unserer Herzenssache!</p>
                </div>
                <div class="main-form">
                    
                    <div class="form-wrapper">
                        <h2>Termin Buchen</h2>
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
                    
                    </div>
                  
                </div>
            </div>
        </section>
    </div>
 </div>
<!-- TEXT AND FORM SECTION END -->


<!-- RANDY FREITAG SECTION START -->
 <div class="randy-freitag-container">
    <div class="container-14">
        <div class="randy-freitag-wrapper">
            <div class="randy-freitag-underwrapper">
                <div class="empty-div"></div>
                <div class="info-div">
                <h2>Randy Freitag</h2>
                <h3> Founder and Director of GermanEyeCare</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Mauris risus adipiscing felis iaculis. Sed massa odio eget nullam ornare felis vitae urna risus. Id suspendisse nullam facilisi sed amet. Cursus sed aliquam gravida in nec id. Interdum nisi at ac eu arcu id viverra pellentesque accumsan. Et commodo enim suspendisse maecenas. Auctor velit diam </p>
                <p>Lorem ipsum dolor sit amet consectetur. Mauris risus adipiscing felis iaculis. Sed massa odio eget nullam ornare felis vitae urna risus. Id suspendisse nullam facilisi sed amet. Cursus sed aliquam gravida in nec id. Interdum nisi at ac eu arcu id viverra pellentesque accumsan. Et commodo enim suspendisse </p>
                </div>
                
            </div>
        </div>
    </div>
 </div>
 <!-- RANDY FREITAG SECTION END -->

 <!-- OUR SERVICES SECTION START -->
  <div class="our-services-container">
    
        <div class="our-section-wrapper">
            <div class="our-section-underwrapper">
                <h2>Our Services</h2>
                <p>We Provides always our best services for our clients, <a href="check services"> check services <img src="/wp-content/uploads/2024/06/vector_4.webp" ></a></p>

                <div class="listed-services">
                    <?php
                        $args = array(
                            'post_type' => 'services',
                            'post_per_page' => -1,
                        );

                        $services_querry = new WP_Query($args);
                        
                        if ( $services_querry->have_posts() ) :
                            ?>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        // Start the Loop
                                        while ( $services_querry->have_posts() ) : $services_querry->the_post();
                                        $post_thumbnail_img = get_the_post_thumbnail_url();
                                        
                                        ?>
                                        
                                            <div class="swiper-slide">
                                                <div class="single-service-card">
                                                <div class="service-card-img">
                                                    <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $post_thumbnail_img; ?>" alt=""></a>
                                                    </div>
                                                    <div class="single-service-info">
                                                    
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_excerpt(); ?>
                                                    
                                                    <div class="single-service-read-more-btn">
                                                        <a href="<?php echo get_permalink(); ?>">Mehr über</a>
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                
                                                </div>
                                                
                                            </div>
                                        <?php
                                        endwhile;
                                        ?>
                                        
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            <?php
                            endif;
                            
                            // Reset Post Data
                            wp_reset_postdata();
                    ?>
               
                </div>
            </div>

        </div>
    
  </div>
  <!-- OUR SERVICES SECTION END -->


   <!-- BLOG SECTION START -->
    <div class="blog-home-container">
        <div class="container-14">
            <div class="blog-home-wrapper">
                <div class="blog-home-underwrapper">
                    <h2>Current specialist articles</h2>
                    <p>Lorem ipsum dolor sit amet consecteturat augue, <a href="#"> check blog <img src="/wp-content/uploads/2024/06/vector_4.webp" ></a></p>
                    <div class="blog-home-list">
                    <?php
                $post_args= array(
                'post_type'      => 'post',
                'posts_per_page' => 4, 
                );
                $blog_posts = new WP_Query($post_args);
                $categories = get_the_category();
                if($blog_posts->have_posts()){
                    while($blog_posts->have_posts()){
                        $blog_posts->the_post();
                        $categories = get_the_category();
                        ?>
                        <a href="<?php echo get_permalink(); ?>">
                        <div class="single-blog-card">
                         <div class="post-image">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <p class="category-name-banner"><?php if(!empty($categories)){echo esc_html($categories[1]->name);} ?></p>
                         </div>
                            <div class="post-info">
                            <p><img src="/wp-content/uploads/2024/06/clock-icon.webp"> <?php echo get_the_date();?></p>
                            <h2><?php the_title(); ?></h2>
                            <h3><?php echo get_the_excerpt();?></h3>
                            </div>
                            
                        </div>
                        </a>
                        
                        <?php
                    }    
                }else{
                    echo "No posts found";
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG SECTION END -->
<?php get_footer(); ?>



<script>
    // SWIPER LOGIC START
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop:true,
      
    });
    // SWIPER LOGIC END

    // DODAVANJE ELEMENATA U PLUGIN FORMU START

    
    document.addEventListener('DOMContentLoaded', (event) => {
    
    var firstParallelFieldsDiv = document.createElement('div');
    firstParallelFieldsDiv.className = 'paralel-fields';

    var existingDiv = document.getElementById('frm_field_8_container');

    existingDiv.parentNode.insertBefore(firstParallelFieldsDiv, existingDiv.nextSibling);

    var field9 = document.getElementById('frm_field_9_container');
    var field11 = document.getElementById('frm_field_11_container');

    firstParallelFieldsDiv.appendChild(field9);

    var dividerDiv1 = document.createElement('div');
    dividerDiv1.className = 'form-divider';

    var img1 = document.createElement('img');
    img1.src = '/wp-content/uploads/2024/06/vector_21.webp';
    dividerDiv1.appendChild(img1);

    firstParallelFieldsDiv.appendChild(dividerDiv1);

    firstParallelFieldsDiv.appendChild(field11);

    var secondParallelFieldsDiv = document.createElement('div');
    secondParallelFieldsDiv.className = 'paralel-fields';

    firstParallelFieldsDiv.parentNode.insertBefore(secondParallelFieldsDiv, firstParallelFieldsDiv.nextSibling);

    var field12 = document.getElementById('frm_field_12_container');
    var field13 = document.getElementById('frm_field_13_container');

    secondParallelFieldsDiv.appendChild(field12);

    var dividerDiv2 = document.createElement('div');
    dividerDiv2.className = 'form-divider';

    var img2 = document.createElement('img');
    img2.src = '/wp-content/uploads/2024/06/vector_21.webp';
    dividerDiv2.appendChild(img2);

    secondParallelFieldsDiv.appendChild(dividerDiv2);

    secondParallelFieldsDiv.appendChild(field13);
});
    // DODAVANJE ELEMENATA U PLUGIN FORMU END

    // KADA ODABEREMO POLJE DROPWDONU U FORMI MENJA SE FONT START
    const dropdownServiceHome = document.getElementById('field_coxqx');

    dropdownServiceHome.addEventListener('change', function() {
  if (dropdownServiceHome.value === "") {
    dropdownServiceHome.classList.remove('change-select');
  } else {
    dropdownServiceHome.classList.add('change-select');
  }
});


const dropdownSandortHome = document.getElementById('field_3cari');

dropdownSandortHome.addEventListener('change', function() {
if (dropdownSandortHome.value === "") {
    dropdownSandortHome.classList.remove('change-select');
} else {
    dropdownSandortHome.classList.add('change-select');
}
});

const hourHome = document.getElementById('field_lddwq_H');

hourHome.addEventListener('change', function() {
if (hourHome.value === "") {
    hourHome.classList.remove('change-select');
} else {
    hourHome.classList.add('change-select');
}
});

const minuteHome = document.getElementById('field_lddwq_m');

minuteHome.addEventListener('change', function() {
if (minuteHome.value === "") {
    minuteHome.classList.remove('change-select');
} else {
    minuteHome.classList.add('change-select');
}
});
    // KADA ODABEREMO POLJE DROPWDONU U FORMI MENJA SE FONT END


    //POSTAVLJANJE LOGIKE DA KORISNIK NE MOZE DA ODABERE DATUM U PROSLOTSTI NA FORMI START
   

$( function() {
    $( "#field_r4twn" ).datepicker({ minDate: 0, maxDate: "+12M" });
  } );

//POSTAVLJANJE LOGIKE DA KORISNIK NE MOZE DA ODABERE DATUM U PROSLOTSTI NA FORMI END
</script>