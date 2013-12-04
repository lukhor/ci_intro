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
                            <li>
                                <a href="accomodation"> <?php echo label('accomodation', $this); ?></a>
                            </li>
                            <li>
                                <a href="photos"> <?php echo label('photogallery', $this); ?></a>
                            </li>
                            <li class="active">
                                <a href="attractions"> <?php echo label('attractions', $this); ?></a>
                            </li>
                            <li>
                                <a href="contact"> <?php echo label('contact', $this); ?></a>
                            </li>
                            <li<?php
							if ($this -> session -> userdata("lang") == "slovak") {echo " class='active'";
							}
							?>>
                                <?php
								$this -> session -> set_userdata("page", "attractions");
								echo anchor("site/change/slovak", "SK");
                                ?>
                            </li>
                            <li<?php
							if ($this -> session -> userdata("lang") == "english") {echo " class='active'";
							}
							?>>
                                <?php
								$this -> session -> set_userdata("page", "attractions");
								echo anchor("site/change/english", "ENG");
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
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/carousel/piestany-tiltshift.jpg" alt="First slide">
            </div>
            <div class="item">
                <img src="images/carousel/inovec-tiltshift.jpg" alt="Second slide">
            </div>
            <div class="item">
                <img src="images/carousel/furman-tiltshift.jpg" alt="Third slide">
            </div>
            <div class="item">
                <img src="images/carousel/javorina-tiltshift.jpg" alt="Fourth slide">
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
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span
                        class="text-muted">It'll blow your mind.</span></h2>

                <p class="lead">
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/beckov_logo.png"
                  >
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/kalnica_logo.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span>
                </h2>

                <p class="lead">
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                </p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>

                <p class="lead">
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/tematin_logo.png">
            </div>
        </div>

		<hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/piestany_logo2.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span>
                </h2>

                <p class="lead">
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                </p>
            </div>
        </div>

		<hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>

                <p class="lead">
                    Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                    commodo.
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/furman_logo.png">
            </div>
        </div>

        <hr class="featurette-divider">

    </div>
    <!--</div>--><!--uzavretie body divu v footri-->