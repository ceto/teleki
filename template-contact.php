<?php
/**
* Template Name: Kapcsolat Sablon
*/
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="large-12 cell">
            <header class="pagehead ps ps--narrow">
                <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
            </header>
        </div>
    </div>
</div>
<div class="ps ps--notop">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-12 cell contactcontent">
                <div class="grid-x grid-margin-x">
                    <div class="cell medium-6 large-3">
                        <h4>Cím</h4>
                        <p><strong>BGSZC Teleki Blanka Közgazdasági Szakgimnáziuma</strong><br />
                            H-1095 Budapest,<br />
                            Mester utca 23.<br />
                        </p>
                        <p><strong>Kapunyitás:</strong><br />
                            Reggel 7-kor, fél órával a első óra kezdése előtt
                        </p>
                    </div>
                    <div class="cell medium-6 large-3">
                        <h4>Elérhetőség</h4>
                        <p><strong>Telefon:</strong><br />
                            <a href="tel:+3613280774">+36 (1) 215 9254</a>
                        </p>
                        <p><strong>E-mail:</strong><br />
                            <a href="mailto:titkarsag@teleki-bp.sulinet.hu">titkarsag@teleki-bp.sulinet.hu</a>
                        </p>
                        <p><strong>És még:</strong><br />
                            <a href="https://www.facebook.com/TelekiBlankaKozgazdasagiSzki/" target="_blank" rel="noopener">Facebook</a>
                        </p>
                    </div>
                    <div class="cell medium-6 large-6">
                        <h4>Megközelítés</h4>
                        <p><strong>Körútról:</strong><br>4-es és 6-os villamos Mester utcai megállótól 500 méter.</p>
                        <p><strong>Közvetlen megálló:</strong><br>51-es villamos Bokréta utcai megálló.</p>
                        <p><strong>Haller utca felől:</strong><br>24-es villamos Mester utcai megállótól 800 méter. </p>
                        <p><small><a href="#">útvonaltervezés…</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid-container full">
    <div class="grid-x">
        <div class="medium-7 xlarge-8 axxlarge-9 cell mapcanvascell medium-order-2">
            <div class="mapcanvas" id="mapcanvas"></div>
        </div>
        <div class="medium-5 xlarge-4 axxlarge-3 ashow-for-tablet cell medium-order-1">
            <img class="mapphoto" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/teleki-bejarat.jpg" alt="">
        </div>
    </div>
</div>
<!-- Google MAps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT99lOn79TnwKX53VjwYSfmFvz97OYpwA"></script>
<script>
function initialize() {
var mapOptions = {
center: new google.maps.LatLng(47.478830, 19.073160),
zoom: 17,
zoomControl: true,
zoomControlOptions: {style: google.maps.ZoomControlStyle.DEFAULT,},
disableDoubleClickZoom: false,
mapTypeControl: true,
mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,},
scaleControl: true,
scrollwheel: false,
streetViewControl: true,
draggable: true,
overviewMapControl: true,
overviewMapControlOptions: {opened: false,},
mapTypeId: google.maps.MapTypeId.ROADMAP,
styles: [{featureType: "landscape",stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]}, {featureType: "poi",stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]}, {featureType: "road.highway",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "road.arterial",stylers: [{saturation: -100}, {lightness: 30}, {visibility: "on"}]}, {featureType: "road.local",stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]}, {featureType: "transit",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "administrative.province",stylers: [{visibility: "off"}]/** /},{featureType: "administrative.locality",stylers: [{ visibility: "off" }]},{featureType: "administrative.neighborhood",stylers: [{ visibility: "on" }]/**/}, {featureType: "water",elementType: "labels",stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]}, {featureType: "water",elementType: "geometry",stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]}],
}
map = new google.maps.Map(document.getElementById('mapcanvas'), mapOptions);
//var image = '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag.png';
var myLatLng = new google.maps.LatLng(47.478830, 19.073160);
var officeMarker = new google.maps.Marker({
position: myLatLng,
map: map,
//icon: image,
animation: google.maps.Animation.DROP,
});
//officeMarker.setAnimation(google.maps.Animation.BOUNCE);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php endwhile; ?>