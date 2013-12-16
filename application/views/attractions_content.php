<body>
    <!--NAVBAR-->
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
                            <li class="active">
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
	
	<!--divider
	        <div class="divider1">
        	</div>
     -->
        	<hr class="style-five">
    <div class="container">
        <!-- START THE FEATURETTES -->

<div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/bezovec_logo.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta13', $this); ?>
                </h2>

                <p class="lead">
                    <?php echo label('veta14', $this); ?>
                </p>
            </div>
        </div>

        <hr class="style-two">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta15', $this); ?></h2>

                <p class="lead">
                    <?php echo label('veta16', $this); ?>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/beckov_logo.png"
                  >
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/kalnica_logo.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta17', $this); ?>
                </h2>

                <p class="lead">
                    <?php echo label('veta18', $this); ?>
                </p>
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta19', $this); ?></h2>

                <p class="lead">
                    <?php echo label('veta20', $this); ?>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/tematin_logo.png">
            </div>
        </div>

		<hr class="style-two">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/piestany_logo2.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta21', $this); ?>
                </h2>

                <p class="lead">
                    <?php echo label('veta22', $this); ?>
                </p>
            </div>
        </div>

		<hr class="style-two">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta23', $this); ?></h2>

                <p class="lead">
                    <?php echo label('veta24', $this); ?>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/furman_logo.png">
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" src="images/turistika_logo.png"
                    >
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo label('veta25', $this); ?>
                </h2>

                <p class="lead">
                    <?php echo label('veta26', $this); ?></p>
            </div>
        </div>
<hr class="featurette-divider">
    </div>
    </div>
      <hr class="style-four">
    <!--</div>--><!--uzavretie body divu v footri-->