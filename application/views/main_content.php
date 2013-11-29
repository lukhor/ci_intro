<body>
<script>
    $(document).ready(function () {
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

        /*FANCY SCRIPT*/

        $(".fancybox").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',

            helpers: {
                overlay: {
                    css: {
                        'background': 'rgba(0, 0, 0, 0.9)'
                    }
                },
                title: {
                    type: 'outside'
                },
                thumbs: {
                    width: 50,
                    height: 50
                },
                buttons: {}
            }
        });

        $(".fancybox-thumb").fancybox({
            prevEffect: 'none',
            nextEffect: 'none',
            helpers: {
                title: {
                    type: 'outside'
                },
                thumbs: {
                    width: 50,
                    height: 50
                },
                buttons: {}
            }
        });
    });


</script>

<div class="container">
    <!--<h1><a href="”#”">Privat</a></h1>-->

    <!--NAVBAR-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $name ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="home">O nás</a></li>
                <li><a href="photos">Fotogaléria</a></li>
                <li><a href="pricelist">Cenník</a></li>
                <li><a href="reservation">Rezervácie</a></li>
                <li><a href="contact"><?php echo label('accomodation', $this); ?></a></li>
                <li><?php echo anchor("site/change/slovak", "SK") ?></li>
                <li><?php echo anchor("site/change/english", "ENG") ?></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <!--Image flex bar-->
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="images/img1.jpg"/>
            </li>
            <li>
                <img src="images/img2.jpg"/>
            </li>
            <li>
                <img src="images/img3.jpg"/>
            </li>
            <li>
                <img src="images/img2.jpg"/>
            </li>
        </ul>
    </div>
    <!--CONTENT-->

    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-list">
                <div class="row">
                    <h3>How we started ?</h3>
                </div>
                <div class="row">
                    <h3>How we started ?</h3>
                </div>
                <div class="row">
                    <h3>How we started ?</h3>
                </div>
            </ul>
        </div>
        <div class="col-md-9">
            <div id="map" style="width: 100%; height:500px; background:#6699cc;"></div>
            <h3>How we started ?</h3>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui.</p>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui.</p>

            <a class="fancybox" rel="gallery1" href="images/img1.jpg" title="izba číslo 1">
                <img src="images/img1.jpg" alt="" style="width: 200px"/>
            </a>
            <a class="fancybox" rel=gallery1" href="images/img2.jpg" title="izba číslo 2">
                <img src="images/img2.jpg" style="width: 200px" alt=""/>
            </a>
            <a class="fancybox" rel="gallery1" href="images/img3.jpg" title="izba číslo 2">
                <img src="images/img3.jpg" style="width: 200px" alt=""/>
            </a>
            <a class="fancybox" rel="gallery1" href="images/img3.jpg" title="izba číslo 2">
                <img src="images/img3.jpg" style="width: 200px" alt=""/>
            </a>

            <h3>How do we market?</h3>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui.</p>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui.</p>

            <a class="fancybox-thumb" rel="fancybox-thumb" href="images/img1.jpg"
               title="Ayvalık, Turkey (Nejdet Düzen)">
                <img src="images/img1.jpg" alt=""/>
            </a>
            <a class="fancybox-thumb" rel="fancybox-thumb" href="images/img2.jpg"
               title="Sicilian Scratches   erice (italianoadoravel on/off coming back)">
                <img src="images/img2.jpg" alt=""/>
            </a>
        </div>
    </div>
    <!--</div>--><!--uzavretie divu v footri-->


