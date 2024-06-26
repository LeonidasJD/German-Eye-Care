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
 <!-- HERO SECTION END -->
<?php get_footer(); ?>



<script>

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