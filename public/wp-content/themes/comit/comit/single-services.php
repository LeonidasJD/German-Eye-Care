<?php get_header(); ?>
<!--HERO SECTION START-->
<section class="services-post-hero-wrapper">
<?php  get_template_part('template-parts/hero-banner'); ?>
</section>
<!--HERO SECTION END-->

<!--TEXT AND FORM SECTION START-->
<div class="container-text-and-form-section">
    <div class="container-14">
    <section class="text-form-section-wrapper">
    <div class="text-form-section-underwrapper">
        <div class="post-text">
            <?php /**prolazim kroz repeater i proveravam da li ima sekcija u single service postu */
            if(have_rows('service_section')):
                 while(have_rows('service_section')) :
                     the_row();
                
                     $section_title = get_sub_field('title');
                     $section_subtitle = get_sub_field('subtitle');
                     $section_description = get_sub_field('description');
                     $section_image = get_sub_field('service_image');

                     echo '<div class="service-section-wrapper">';

                     if(!empty($section_title)){
                        ?>
                        <div class="services-section-title"><h2><?php echo $section_title ?></h2></div>
                        <?php
                     }
                     if(!empty($section_subtitle)){
                        ?>
                        <div class="services-section-subtitle"><h3><?php echo $section_subtitle ?></h3></div>
                        <?php
                     }
                     if(!empty($section_description)){
                        ?>
                        <div class="services-section-description"><p><?php echo $section_description ?></p></div>
                        <?php
                     }
                     if(!empty($section_image)){
                        ?>
                        <div class="services-section-image"><img src="<?php echo $section_image ?>"></div>
                        <?php
                     }

                     echo '</div>';

            endwhile;
            else:
                echo '<div class="no-info-message"><h4>Information will be available soon</h4></div>';
        endif;
      
            ?>
            <!--kraj petlje i ispisivanje sekcija -->
        </div>
        <div class="post-form">
        <div class="post-form-wrapper">
            <div class="formidable-form">
            <div class="form-wrapper">
                        <h2>Termin Buchen</h2>
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
                    
                    </div>
        </div>
        </div>    
        
    </div>
    </div>
</section>
    </div>
</div>

<!--TEXT AND FORM SECTION END-->

<!--RELATED SERVICES SECTION START-->
<div class="container0related-services-section">
    <div class="container-14">
    <section class="related-services-section-wrapper">
    <div class="related-services-section-underwrapper">
        <h2>Weitere Leistungen</h2>
        <p class="related-services-underhead">Dignissim massa duis eget turpis fringilla nam ridiculus ultricies urna vehicula fusce. Elit interdum urna iaculis leo sit pharetra vel. Vitae letius luctus lacinia rhoncus penatibus per.</p>
        <div class="related-services-cards-wrapper">

        <?php 
        $current_post_id = get_the_ID();

        $related_services_card_args= array(
            'post_type' =>'services',
            'posts_per_page' =>'3',
            'post__not_in' => array($current_post_id),
        );

        $related_services = new WP_Query( $related_services_card_args );

        if($related_services->have_posts()){
            while($related_services->have_posts()){
                $related_services->the_post();
                ?> 
                
                <div class="related-single-service-card">
                    <a href="<?php echo get_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                    
                    <div class="related-service-card-info">
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <div class="related-service-button"><a href="<?php echo get_permalink(); ?>">Mehr über</a></div>
                    
                    </div>
                    
                </div>
                
                
                <?php
            }
        }else{
            'Services not found!';
        }
        ?>
        </div>
    </div>
</section>
    </div>
</div>

<!--RELATED SERVICES SECTION END-->

 <!-- MOBILE SIDE BANNER START -->
 <?php get_template_part('template-parts/mobile-side-banner') ?>
<!-- MOBILE SIDE BANNER END -->


<?php get_footer();?>

<script>




// POSTAVLJANJE NOVOG ELEMNTA U FORMU START
 // Kreiranje novog elementa sa klasom 'paralel-fields'
 // Kreiranje prvog elementa sa klasom 'paralel-fields'
 var paralelFields1 = document.createElement('div');
    paralelFields1.className = 'paralel-fields';

    // Pronalazak elemenata koje treba premestiti u prvi 'paralel-fields'
    var field9Container = document.getElementById('frm_field_9_container');
    var field11Container = document.getElementById('frm_field_11_container');

    // Kreiranje elementa 'form-divider' sa 'img' unutra za prvi 'paralel-fields'
    var formDivider1 = document.createElement('div');
    formDivider1.className = 'form-divider';
    var img1 = document.createElement('img');
    img1.src = '/wp-content/uploads/2024/06/vector_21.webp';
    formDivider1.appendChild(img1);

    // Premestanje elemenata unutar prvog 'paralel-fields'
    paralelFields1.appendChild(field9Container);
    paralelFields1.appendChild(formDivider1);
    paralelFields1.appendChild(field11Container);

    // Pronalazak elementa ispod kojeg treba postaviti prvi 'paralel-fields'
    var field8Container = document.getElementById('frm_field_8_container');
    field8Container.parentNode.insertBefore(paralelFields1, field8Container.nextSibling);

    // Kreiranje drugog elementa sa klasom 'paralel-fields'
    var paralelFields2 = document.createElement('div');
    paralelFields2.className = 'paralel-fields';

    // Pronalazak elemenata koje treba premestiti u drugi 'paralel-fields'
    var field12Container = document.getElementById('frm_field_12_container');
    var field13Container = document.getElementById('frm_field_13_container');

    // Kreiranje elementa 'form-divider' sa 'img' unutra za drugi 'paralel-fields'
    var formDivider2 = document.createElement('div');
    formDivider2.className = 'form-divider';
    var img2 = document.createElement('img');
    img2.src = '/wp-content/uploads/2024/06/vector_21.webp';
    formDivider2.appendChild(img2);

    // Premestanje elemenata unutar drugog 'paralel-fields'
    paralelFields2.appendChild(field12Container);
    paralelFields2.appendChild(formDivider2);
    paralelFields2.appendChild(field13Container);

    // Postavljanje drugog 'paralel-fields' ispod prvog 'paralel-fields'
    paralelFields1.parentNode.insertBefore(paralelFields2, paralelFields1.nextSibling);
// POSTAVLJANJE NOVOG ELEMNTA U FORMU END


// OGRANICAVANJE DA SE ODABERE DATUM U PROSLOSTI U FORMI START
$( function() {
    $("#field_r4twn" ).datepicker({ minDate: 0, maxDate: "+12M" });
  } );
  // OGRANICAVANJE DA SE ODABERE DATUM U PROSLOSTI U FORMI START


  // KADA ODABEREMO OPCIJU IZ DROPDOWNA ONDA OPCIJA BUDE BOLD START
  const dropdownSingleService = document.getElementById('field_coxqx');

  dropdownSingleService.addEventListener('change', function() {
  if (dropdownSingleService.value === "") {
    dropdownSingleService.classList.remove('change-select');
  } else {
    dropdownSingleService.classList.add('change-select');
  }
});
const dropdownSingleServiceStandort = document.getElementById('field_3cari');

dropdownSingleServiceStandort.addEventListener('change', function() {
if (dropdownSingleServiceStandort.value === "") {
    dropdownSingleServiceStandort.classList.remove('change-select');
} else {
    dropdownSingleServiceStandort.classList.add('change-select');
}
});
const dropdownSingleStandort = document.getElementById('field_3cari');

dropdownSingleStandort.addEventListener('change', function() {
if (dropdownSingleStandort.value === "") {
    dropdownSingleStandort.classList.remove('change-select');
} else {
    dropdownSingleStandort.classList.add('change-select');
}
});

  const dropdownSingleHour = document.getElementById('field_lddwq_H');

  dropdownSingleHour.addEventListener('change', function() {
  if (dropdownSingleHour.value === "") {
    dropdownSingleHour.classList.remove('change-select');
  } else {
    dropdownSingleHour.classList.add('change-select');
  }
});
const dropdownSingleMinute = document.getElementById('field_lddwq_m');

dropdownSingleMinute.addEventListener('change', function() {
  if (dropdownSingleMinute.value === "") {
    dropdownSingleMinute.classList.remove('change-select');
  } else {
    dropdownSingleMinute.classList.add('change-select');
  }
});
// KADA ODABEREMO OPCIJU IZ DROPDOWNA ONDA OPCIJA BUDE BOLD END
</script>