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
                        <li class="active">
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
							if ($this -> session -> userdata("lang") == "slovak") {
								echo " class='active'";
							}
                        ?>>
                            <?php
							$this -> session -> set_userdata("page", "home");
							echo anchor("site/change/slovak", "SK");
                            ?>
                        </li>
                        <li<?php
							if ($this -> session -> userdata("lang") == "english") {
								echo " class='active'";
							}
 ?>>
                            <?php
							$this -> session -> set_userdata("page", "home");
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

        <div class="item">
            <img src="images/carousel/XXwide7-tiltshift.jpg" alt="image">
        </div>
        <div class="item active">
            <img src="images/carousel/Xwide8-tiltshift.jpg" alt="image">
        </div>
    </div>
</div>
<!-- 
<div class="navbar navbar-inverse nowrap">
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

<!-- ======= weather div -->
<div id="weather" class="weatherFeed" style="display: none"></div>
<div class="content">
	 <hr class="style-five">
<div class="container">
    <!--<li><a href="contact"><?php /*echo label('accomodation', $this); */?></a></li>
        <li><?php /*echo anchor("site/change/slovak", "SK") */?></li>
        <li><?php /*echo anchor("site/change/english", "ENG") */?></li>-->

    <!--CONTENT-->
<!--
    <div class="row">
        <div class="col-lg-12">

            <h3><?php echo label('veta1', $this); ?></h3>

            <h3><?php echo label('veta2', $this); ?></h3>

            <h3><?php echo label('veta3', $this); ?></h3>

            <h3><?php echo label('veta4', $this); ?></h3>

            <h3><?php echo label('veta5', $this); ?></h3>

            <h3><?php echo label('veta6', $this); ?></h3>

            <h3><?php echo label('veta7', $this); ?></h3>

            <h3><?php echo label('veta8', $this); ?></h3>

            <h3><?php echo label('veta9', $this); ?></h3>

            <h3><?php echo label('veta10', $this); ?></h3>

        </div>
    </div>
    <!--</div>--><!--uzavretie divu v footri-->
    <!-- Button trigger modal -->



            <div class="col-md-7">
                <h2>Ubytovanie Modrovka. <span class="text-muted"></span>
                </h2>

                <p class="lead2">
                    "Ubytovanie je vhodné pre široké spektrum zákazníkov a každý tu nájde to, čo práve potrebuje."<br>


                </p>
                 <p class="lead3">

					Na Vašu návštevu sa teší Marta Masárová.

                </p>
            </div>


        <div class="rychly_kontakt">
        </div>
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        <?php echo label('reservation', $this); ?>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo label('reservationform', $this); ?></h4>
                </div>
                <form role="form" action="site/sent_mail" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nameOf"><?php echo label('name', $this); ?></label>
                            <input type="text" class="form-control" id="nameOf" name="nameOf" placeholder="<?php echo label('name_', $this); ?>">
                        </div>

                        <div class="form-group">
                            <label for="dateFrom"><?php echo label('datefrom', $this); ?></label>
                            <input type="date" class="form-control" id="dateFrom" name="dateFrom" placeholder="<?php echo label('datefrom_', $this); ?>">
                        </div>

                        <div class="form-group">
                            <label for="dateTo"><?php echo label('dateto', $this); ?></label>
                            <input type="date" class="form-control" id="dateTo" name="dateTo" placeholder="<?php echo label('dateto_', $this); ?>">
                        </div>

                        <div class="form-group">
                            <label for="amountOfPerson"><?php echo label('amountof', $this); ?></label>
                            <input type="number" class="form-control" id="amountOfPerson" name="amountOfPerson"
                                   placeholder="<?php echo label('amountof_', $this); ?>">
                        </div>

                        <div class="form-group">
                            <label for="contact1"><?php echo label('contact', $this); ?></label>
                            <input type="text" class="form-control" id="contact1" name="contact1"
                                   placeholder="<?php echo label('contact_', $this); ?>">
                        </div>

                        <div class="form-group">
                            <label for="note"><?php echo label('note', $this); ?></label>
                            <input type="text" class="form-control" id="note" name="note"
                                   placeholder="<?php echo label('note_', $this); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo label('exit', $this); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo label('send', $this); ?></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  <hr class="featurette-divider">
</div>
</div>
  <hr class="style-four">