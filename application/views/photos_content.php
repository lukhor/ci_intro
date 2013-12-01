<body>

<script>
    $(document).ready(function () {
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
<!--NAVBAR-->
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
                        <li class="active">
                            <a href="photos">Fotogaléria</a>
                        </li>
                        <li>
                            <a href="attractions">Okolie</a>
                        </li>
                        <li>
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
    <!--CONTENT-->
    <div class="row">
        <div class="col-lg-12">
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
        </div>
    </div>
    <!--</div>--><!--uzavretie divu v footri-->
</div>