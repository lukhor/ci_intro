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
    });
</script>

<body>
<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="home" data-toggle="popover" class="logo"> </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="home"> <?php echo label('about', $this); ?></a>
                        </li>
                        <li>
                            <a href="accomodation"> <?php echo label('accomodation', $this); ?></a>
                        </li>
                        <li>
                            <a href="photos"> <?php echo label('photogallery', $this); ?></a>
                        </li>
                        <li>
                            <a href="attractions"> <?php echo label('attractions', $this); ?></a>
                        </li>
                        <li class="active">
                            <a href="contact"> <?php echo label('contact', $this); ?></a>
                        </li>

                        <li>
                            <div class="pocasie_komplet">
                                <div class="pocasie_nazov1">
                                    <?php echo label('actual', $this); ?>
                                </div>
                                <div class="weather-button">
                                    <div class="weather-toggle">
                                        <a data-toggle="popover" class="pocasie"> </a>
                                    </div>
                                </div>
                                <div class="pocasie_nazov2">
                                    <?php echo label('weather', $this); ?>
                                </div>
                            </div>
                        </li>
                        <li<?php
                        if ($this->session->userdata("lang") == "slovak") {
                            echo " class='active'";
                        }
                        ?>>
                            <?php
                            $this->session->set_userdata("page", "contact");
                            echo anchor("site/change/slovak", "SK");
                            ?>
                        </li>
                        <li<?php
                        if ($this->session->userdata("lang") == "english") {
                            echo " class='active'";
                        }
                        ?>>
                            <?php
                            $this->session->set_userdata("page", "contact");
                            echo anchor("site/change/english", "ENG");
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/carousel/kontakt-tiltshift2.jpg" alt="First slide">
        </div>

    </div>
</div>

<!--
<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav social">
                <li>
                    <a href="" class="FB_social"></a>
                </li>
                <li>
                    <a href="" class="G_social"></a>
                </li>
                <li>
                    <a href="" class="Limba_social"></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- ======= weather div -->
<div id="weather" class="weatherFeed" style="display: none"></div>
<div class="content">
    <hr class="style-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <br><br><br><br><br>

                <h1><?php echo label('phone', $this); ?></h1>

                <h4>tel.č.: 033/7785155</h4>
                <h4>mob.č.: 0904/316055</h4>

                <h1><?php echo label('address', $this); ?></h1>

                <h4>Masárová Marta</h4>
                <h4>Modrovka 54</h4>
                <h4>916 35 Modrová</h4>

                <h1><?php echo label('coordinate', $this); ?></h1>

                <h4>N48 38'53.326"</h4>
                <h4>E017 52'42.83"</h4>
            </div>

            <div class="col-lg-6 text-center">
                <h1><?php echo label('route', $this); ?></h1>

                <div class="popin">
                    <div id="map" style="width: 100%; height:500px; background:#6699cc; "></div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
    <!--</div>--><!--uzavretie body divu v footri-->

</div>
<hr class="style-four">