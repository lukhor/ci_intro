<style>

</style>

<body>
<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-default navbar-static-top">
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
                            <a href="home">O nás</a>
                        </li>
                        <li>
                            <a href="accomodation">Ubytovanie</a>
                        </li>
                        <li>
                            <a href="photos">Fotogaléria</a>
                        </li>
                        <li>
                            <a href="attractions">Okolie</a>
                        </li>
                        <li class="active">
                            <a href="contact">Kontakt</a>
                        </li>
                        <li>
                            <div class="pocasie_komplet">
                                <div class="pocasie_nazov1">
                                    Aktuálne
                                </div>
                                <div class="weather-button">
                                    <div class="weather-toggle">

                                        <a data-toggle="popover" class="pocasie"> </a>
                                    </div>

                                </div>
                                <div class="pocasie_nazov2">
                                    počasie
                                </div>
                            </div>
                        </li>

                    </ul>
                    <!--
                    <div class="pocasie_komplet">
                        <div class="pocasie_nazov1">
                            Aktuálne
                        </div>
                        <div class="weather-button">
                            <div class="weather-toggle">

                                <a data-toggle="popover" class="pocasie"> </a>
                            </div>

                        </div>
                        <div class="pocasie_nazov2">
                            počasie
                        </div>
                    </div>
                    -->

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
            <img src="images/img4.jpg" alt="First slide">
        </div>
        <div class="item">
            <img src="images/img5.jpg" alt="Second slide">
        </div>
        <div class="item">
            <img src="images/img6.jpg" alt="Third slide">
        </div>
    </div>
</div>

<!-- ======= weather div -->
<div id="weather" class="weatherFeed" style="display: none"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 text-center">
            <h1>Telefónne číslo</h1>

            <h4>0904123456</h4>
        </div>

        <div class="col-lg-4 text-center">
            <h1>Adresa</h1>

            <h4>Modrovka</h4>
            <h4>Ulica</h4>
            <h4>PSC</h4>
        </div>

        <div class="col-lg-4 text-center">
            <h1>GPS súradnica</h1>

            <h4>5646546546546546</h4>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-12">
            <h1>Ako sa ku nám dostať</h1>

            <div class="popin">
                <div id="map" style="width: 100%; height:500px; background:#6699cc; "></div>
            </div>
        </div>
    </div>



    <!-- /END THE FEATURETTES -->
    <!--</div>--><!--uzavretie body divu v footri-->
