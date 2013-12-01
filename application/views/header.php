<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>

    <!-------->
    <!--CSSs-->
    <!-------->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!----------->
    <!--SCRIPTS-->
    <!----------->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--BOOTSTRAP-->
    <script src="js/bootstrap.min.js"></script>
    <!--FLEXSLIDER-->
    <script src="js/jquery.flexslider.js"></script>

    <!--GMAPS.JS-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="js/gmaps.js" type="text/javascript"></script>

    <!--FANCY BOX-->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />

    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>

    <!--WEATHER-->
    <script src="js/jquery.zweatherfeed.min.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8">
     	$(document).ready(function() {
            /*GMAPS script*/
            map = new GMaps({
                div: '#map',
                lat: 48.648146,
                lng: 17.878564,
                zoom: 10
            });

            map.addMarker({
                lat: 48.648146,
                lng: 17.878564,
                title: 'Penzión Modrovka',
                click: function (e) {
                    alert('Penzion Modrovka');
                }
            });

            GMaps.geolocate({
                success: function (position) {
                    map.drawRoute({
                        origin: [position.coords.latitude, position.coords.longitude],
                        destination: [48.648146, 17.878564],
                        travelMode: 'driving',
                        strokeColor: '#131540',
                        strokeOpacity: 0.6,
                        strokeWeight: 6
                    });

                    map.addMarker({
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                        title: 'start'
                    });

                    map.fitZoom();
                },
                error: function (error) {
                    /*alert('Geolocation failed: ' + error.message);*/
                    map.setZoom(15);
                },
                not_supported: function () {
                    /* alert("Your browser does not support geolocation");*/
                    map.setZoom(15);
                },
                always: function () {
                    /* alert("Done!");*/
                }
            });

            /*WEATHER*/
			$('#weather').weatherfeed(['LOXX0008']);
		});

		$(function() {
			$('.weather-toggle').popover({
				selector : '[data-toggle="popover"]',
				trigger : "click",
				delay : 150,
				placement : "bottom",
				html : "true",
				content : function() {
					return $('#weather').html();
				}
			});
		});
    </script>

    <base href="<?php echo base_url(); ?>"/>
    
</head>
