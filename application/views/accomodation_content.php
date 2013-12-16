<body>
<!--NAVBAR-->
<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-default navbar-static-top navbar-inverse">
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
                        <li class="active">
                            <a href="accomodation"> <?php echo label('accomodation', $this); ?></a>
                        </li>
                        <li>
                            <a href="photos"> <?php echo label('photogallery', $this); ?></a>
                        </li>
                        <li>
                            <a href="attractions"> <?php echo label('attractions', $this); ?></a>
                        </li>
                        <li>
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
                        <li<?php if ($this->session->userdata("lang") == "slovak") {
                            echo " class='active'";
                        } ?>>
                            <?php
                            $this->session->set_userdata("page", "accomodation");
                            echo anchor("site/change/slovak", "SK");
                            ?>
                        </li>
                        <li<?php if ($this->session->userdata("lang") == "english") {
                            echo " class='active'";
                        } ?>>
                            <?php
                            $this->session->set_userdata("page", "accomodation");
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
            <img src="images/carousel/Xwide1-tiltshift.jpg" alt="image">
        </div>
        <div class="item">
            <img src="images/carousel/Xwide2-tiltshift.jpg" alt="image">
        </div>
        <div class="item">
            <img src="images/carousel/Xwide3-tiltshift.jpg" alt="image">
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
    <div>
        <!--<div class="price_sk">

        </div>
        <div class="price2">
        </div>-->
        <div<?php if ($this->session->userdata("lang") == "slovak") echo " class='price_sk'"; else echo " class='price_eng'";?>></div>
        <div<?php if ($this->session->userdata("lang") == "slovak") echo " class='price2_sk'"; else echo " class='price2_eng'";?>></div>
    </div>
    <div class="container">
        <!--CONTENT-->

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta4', $this); ?></h2>

                <p class="lead">
                    <?php echo label('veta5', $this); ?>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto"
                     src="images/ubytovanie_logo.png"
                    >
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto"
                     src="images/social_logo.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta6', $this); ?>
                </h2>

                <p class="lead">
                    <?php echo label('veta7', $this); ?>
                </p>
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta8', $this); ?> </h2>

                <p class="lead">
                    <?php echo label('veta9', $this); ?>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto"
                     src="images/stravovanie_logo.png">
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto"
                     src="images/parking_logo.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('Parking', $this); ?>
                </h2>

                <p class="lead">
                    <?php echo label('veta10', $this); ?>
                </p>
            </div>
        </div>

        <hr class="featurette-divider">


    </div>
</div>
<hr class="style-four">
<!--</div>--><!--uzavretie body divu v footri-->