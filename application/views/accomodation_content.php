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
                            <li<?php if($this->session->userdata("lang")=="slovak"){echo " class='active'";}?>>
                                <?php
                                $this->session->set_userdata("page", "accomodation");
                                echo anchor("site/change/slovak","SK");
                                ?>
                            </li>
                            <li<?php if($this->session->userdata("lang")=="english"){echo " class='active'";}?>>
                                <?php
                                $this->session->set_userdata("page", "accomodation");
                                echo anchor("site/change/english", "ENG") ;
                                ?>
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

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/carousel/wide1-tiltshift.jpg" alt="image">
            </div>
            <div class="item">
                <img src="images/carousel/wide2-tiltshift.jpg" alt="image">
            </div>
            <div class="item">
                <img src="images/carousel/wide3-tiltshift.jpg" alt="image">
            </div>
            <div class="item">
                <img src="images/carousel/wide1.jpg" alt="image">
            </div>
            <div class="item">
                <img src="images/carousel/wide2.jpg" alt="image">
            </div>
            <div class="item">
                <img src="images/carousel/wide3.jpg" alt="image">
            </div>
        </div>
    </div>

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

    <div class="container">
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
                <h3>How we started ?</h3>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                <h3>How do we market?</h3>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>
    </div>
<!--</div>--><!--uzavretie body divu v footri-->