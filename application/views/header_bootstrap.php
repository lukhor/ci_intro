<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.zweatherfeed.min.js" type="text/javascript"></script>
    <script src="js/gmaps.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8">
     	$(document).ready(function() {
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
