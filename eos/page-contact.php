<?php
/**
 * Template Name: Page Contact
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<?php //get_sidebar(); ?>
  <div id="primary" class="contact">
    <div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<?php get_template_part( 'content', 'contact' ); ?>


		<?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->

  <script type="text/javascript">

      function initializeMap() {
          var latlng = new google.maps.LatLng(43.602459, 1.470966);
          var settings = {
              zoom: 15,
              center: latlng,
              mapTypeControl: true,
              mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
              navigationControl: true,
              navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
          var contentString = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h4 id="firstHeading" class="firstHeading">EOSADI Architecture d\'interieur</h4>' + '<div id="bodyContent">' + '<p>1 rue d\'assalit,<br /> 31500, Toulouse. <br /> </p>' + '</div>' + '</div>';
          var infowindow = new google.maps.InfoWindow({content: contentString});
          var companyImage = new google.maps.MarkerImage('<?php bloginfo( 'template_url' ); ?>/img/llogo_map.png', new google.maps.Size(150, 70), new google.maps.Point(0, 0), new google.maps.Point(50, 50));
          var companyShadow = new google.maps.MarkerImage('<?php bloginfo( 'template_url' ); ?>/img/logo_shadow.png', new google.maps.Size(130, 50), new google.maps.Point(0, 0), new google.maps.Point(65, 50));
          var companyPos = new google.maps.LatLng(43.602459, 1.470966);
          var companyMarker = new google.maps.Marker({
              position: companyPos,
              map: map,
              icon: companyImage,
              shadow: companyShadow,
              title: "<?php get_bloginfo('name'); ?>",
              zIndex: 3
          });
          google.maps.event.addListener(companyMarker, 'click', function () {
              infowindow.open(map, companyMarker);
          });
      }


  </script>
  <script type="text/javascript" async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk5yScxjI9wPq7ju4ir9QlLWEu6h6J7eg&callback=initializeMap"></script>


<?php get_footer(); ?>