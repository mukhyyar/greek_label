<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$theme_path = drupal_get_path('theme', 'greeklabel');
$var_lat = $fields['field_latitude']->handler->original_value;
$var_long = $fields['field_longitude']->handler->original_value;
// dpm($row);
// $info_add = $fields['field_address_info']->content;
$info_add = $row->field_field_address_info[0]['raw']['value'];
  // require_once drupal_get_path('module', 'contact') .'/contact.pages.inc';
  // print drupal_get_form('contact_mail_page');
   
 ?>

<section id="sec-7" class="fullheight padd_0 fullheight--bg--grey text-center">
	<div class="container v_align">
		<div class="row">
			<div class="heading_top">
				<h1 class="hidden-sm hidden-xs">How to find us</h1>
				<h1 class="hidden-md hidden-md">Find us</h1>
			</div>
			<div class="col-md-12 padd_0">
			      <div id="map"></div>

			</div>
			
			<a class="nxtbtn nxtbtn--border-white bg--pink nxtbtn--shadow" href="#sec-8"><i class="fas fa-angle-down"></i></a>
			
		</div>
	</div>
</section>
<script>

// GOOGLE MAP CUSTOM Style

      function initMap() {
	    var myLatLng = {lat:<?php echo $var_lat; ?>, lng: <?php echo $var_long; ?>};

        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.674, lng: -73.945},
          zoom: 12,
		   disableDefaultUI: true,
		   zoomControl: true,
		  // mapTypeControl: true,
		  scaleControl: true,
		  // streetViewControl: true,
		  // rotateControl: true,
		  // fullscreenControl: true,
		  
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
        });
		
		<!-- var marker = new google.maps.Marker({ -->
    <!-- position: myLatLng, -->
    <!-- map: map, -->
    <!-- title: 'Hello World!' -->
  <!-- }); -->
  
  var image = {
    url: '<?php echo $theme_path; ?>/assets/images/pin.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(59, 55),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(40, 32)
  };
  
  
  
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
     
      '<div id="bodyContent">'+
      '<p><?php echo $info_add; ?></p>'+
   
    
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString,
	 pixelOffset: new google.maps.Size(148, 120)
  });

 
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,

  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2t3QnHL1sVtuM13vL_ikuTV5X0Y5FErs&callback=initMap"async defer></script>	 



<section id="sec-8" class="fullheight padd_0 fullheight--bg--grey text-center">
	<div class="container v_align">
		<div class="row">
			<div class="heading_top">
				<h1>Contact</h1>
			</div>
			<div class="col-md-4 col-md-offset-4 form-area ">
			    				<?php 

				    require_once drupal_get_path('module', 'contact') .'/contact.pages.inc';
    $myform=drupal_get_form('contact_site_form');
    print drupal_render($myform); 
 
 //new
$block = block_load('block', '1');
$render_block = _block_render_blocks(array($block));
$get_render = _block_get_renderable_array($render_block);
$output = drupal_render($get_render);
// print $output;
// print_r ($get_render);

// dpm ($get_render);

?>
		
				<?php echo $get_render['block_1']['#markup'] ?>
			</div>

			
			
			
		</div>
	</div>
</section>

