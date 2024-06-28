<?php
//Template Name: Contact
get_header();
?>
<div class="contact-section-container">
    <div class="container-14">
        <div class="contact-section-wrapper">
            <div class="contact-section-underwrapper">
                <h1>Kontakt</h1>
                <p>Use our contact form, write an email or call the store directly:</p>
                <div class="map-and-form-wrapper">
                    <div class="map-section">
                        <div class="shop-wrapper">
                        <h2>Standort: Hoffmannoptik Neuenburg</h2>
                        <ul>
                        <li><img src="/wp-content/uploads/2024/06/map-pin-icon1.webp" ><p>Rebstraße 4, 79395 Neuenburg am Rhein</p></li>
                        <li><img src="/wp-content/uploads/2024/06/letter-icon.webp" ><p><a href="mailto:info@germaneyecare.de">info@germaneyecare.de</a></p></li>
                        <li><img src="/wp-content/uploads/2024/06/phone-icon.webp" ><p><a href="tel:07631-73606">07631-73606</a></p></li>
                    </ul>
                        </div>
                        <div class="map-wrapper">
                        <div id ="my-map">
                        <div id="scroll-overlay">Press Ctrl + scroll to zoom</div>
                        </div>
                        </div>
                    
                    </div>
                    <div class="form-section"><h2>FORM PLACEHOLDER</h2></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>

<script>
    // SKRIPTA ZA MAPU START
    // Kreiranje  opcija
var mapOptions = {
            center: [47.81415188935085, 7.56236392336521],
            zoom: 12,
            zoomControl: false
        }

        var map = new L.map('my-map', mapOptions);

        var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

        map.addLayer(layer);

        var pins = [
            { lat: 47.80862931900462, lng: 7.627458655660443, iconUrl: '/wp-content/uploads/2024/06/location-pin-icon.webp', title: 'Shop - Müllheim', descriptions: ['Werderstraße 45, 79379 Müllheim', 'muellheim@hoffmann-optik.de', '07631-3375','<a href="https://www.click2date.eu/hoffmann-Optik-muellheim/appointment/start" target="_blank">Termin buchen</a>'] },
            { lat: 47.81415188935085, lng: 7.56236392336521, iconUrl: '/wp-content/uploads/2024/06/location-pin-icon.webp', title: 'Shop - Neuchâtel', descriptions: ['Rebstraße 4, 79395 Neuenburg am Rhein', 'neuenburg@hoffmann-optik.de', '07631-73606','<a href="https://www.click2date.eu/hoffmann-optik-neuenburg/appointment/start" target="_blank">Termin buchen</a>'] },
        ];

        // Dodavanje pinova na mapu
        for (var i = 0; i < pins.length; i++) {
            var pin = pins[i];

            var popupContent = '<b>' + pin.title + '</b><br>';
            for (var j = 0; j < pin.descriptions.length; j++) {
                popupContent += '<p>' + pin.descriptions[j] + '</p>' + '<br>';
            }
            var pinIcon = L.icon({
                iconUrl: pin.iconUrl,
                iconSize: [70, 90],
                iconAnchor: [20, 40],
                popupAnchor: [0, -40]
            });

            L.marker([pin.lat, pin.lng], { icon: pinIcon }).addTo(map)
                .bindPopup(popupContent);
        }

        function calculateZoomLevel() {
            if (window.innerWidth < 768) { 
                return 11; 
            } else {
                return 13; 
            }
        }

        // Funkcija za detekciju da li je uređaj mobilni
        function isMobileDevice() {
            return /Mobi|Android/i.test(navigator.userAgent);
        }

        // Onemogućavamo podrazumevano zumiranje točkićem miša
        map.scrollWheelZoom.disable();

        // Flag za praćenje da li je Ctrl pritisnut
        var ctrlPressed = false;
        var overlay = document.getElementById('scroll-overlay');

        if (!isMobileDevice()) {
            // Event listener za detekciju pritiska Ctrl tastera
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Control') {
                    ctrlPressed = true;
                    map.scrollWheelZoom.enable();
                    overlay.style.display = 'none';
                }
            });

            // Event listener za detekciju puštanja Ctrl tastera
            document.addEventListener('keyup', function(e) {
                if (e.key === 'Control') {
                    ctrlPressed = false;
                    map.scrollWheelZoom.disable();
                }
            });

            // Event listener za omogućavanje zumiranja kada miš uđe u mapu ako je Ctrl pritisnut
            map.on('mouseenter', function() {
                if (ctrlPressed) {
                    map.scrollWheelZoom.enable();
                }
            });

            // Event listener za onemogućavanje zumiranja kada miš napusti mapu
            map.on('mouseleave', function() {
                map.scrollWheelZoom.disable();
                overlay.style.display = 'none';
            });

            // Event listener za pokušaj skrolovanja bez Ctrl tastera
            map.on('wheel', function(e) {
                if (!ctrlPressed) {
                    overlay.style.display = 'flex';
                }
            });

            // Event listener za detekciju klika na mapu
            map.on('click', function() {
                if (ctrlPressed) {
                    overlay.style.display = 'none';
                }
            });

            // Dodajemo event listener za skrolovanje pomoću drugih događaja radi kompatibilnosti
            map.getContainer().addEventListener('DOMMouseScroll', function(e) {
                if (!ctrlPressed) {
                    overlay.style.display = 'flex';
                }
            });

            map.getContainer().addEventListener('mousewheel', function(e) {
                if (!ctrlPressed) {
                    overlay.style.display = 'flex';
                }
            });
        } else {
            // Ako je uređaj mobilni, omogućavamo zumiranje dodirom
            map.touchZoom.enable();
            map.scrollWheelZoom.enable();
        }
    // SKRIPTA ZA MAPU END
</script>