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
            <div class="col-md-7">
                <h2 class="featurette-heading">Hrad Beckov. <span
                        class="text-muted">Národná kultúrna pamiatka Slovenska. </span></h2>

                <p class="lead">
                    Bol hradom kráľov, mocných veľmožov a rytierov, hradom, ktorý odolal Tatárom aj Turkom. 
                    Jeho minulosť je opradená povesťami, ktoré umocňujú romantiku jeho dnešnej podoby. 
                    V jeho blízkosti môžete taktiež navštíviť: cyklotrasy, reštauráciu Kúria Beckov alebo kolkáreň..
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
                <h2 class="featurette-heading">Kálnica. <span class="text-muted">Raj pre športovcov.</span>
                </h2>

                <p class="lead">
                    V lete je to bike park Kalnica, kde sa stretávajú tí najväčší nadšenci downhillu. 
                    Pokiaľ vlastníte takéto monštrum, táto lokalita je ako stvorená pre vás. 
                    Naopak v zime dostáva zjazdovka biely nádych a mení sa tak na lyžiarske stredisko s množstvom akcíí, ktoré čakajú práve na vás..
                </p>
            </div>
        </div>

        <hr class="style-two">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Tematínsky hrad. <span class="text-muted">Jeden z najkrajších výhľadov.</span></h2>

                <p class="lead">
                    Zrúcanina hradu na Západnom Slovensku v pohorí Považský Inovec. Od jeho vzniku v 13. storočí vystriedal mnoho majiteľov. 
                    Začiatkom 18. storočia bol ťažko poškodený a pustol. V okolí chránené územie Tematínske vrchy.
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
                <h2 class="featurette-heading">Piešťany. <span class="text-muted">Kúpeľné mesto na Slovensku.</span>
                </h2>

                <p class="lead">
                    Mesto Piešťany netreba zvlášť predstavovať. Od obce Modrovka je vzdialené 10 km. 
                    Je tam veľa možností kultúrneho a športového využitia a kúpele poskytujú relax a oddych. 
                    Procedúry sú poskytované aj ambulantne, takže je tu možnosť dochádzania. Je to cca 8 km. 
                    V období kúpeľnej sezóny sú poriadané rôzne akcie, ktoré uspokoja aj tých najnáročnejších.
                </p>
            </div>
        </div>

		<hr class="style-two">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Furman. <span class="text-muted">Reštaurácia v prírode.</span></h2>

                <p class="lead">
                    Vynikajúca kuchyňa a príjemné posedenie v prírode obklopené divou zverou (jelene, daniele, srnky, lane). 
                    Pre deti je pripravené detské ihrisko.
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
                <h2 class="featurette-heading">Turistika. <span class="text-muted">Hory všade naokolo.</span>
                </h2>

                <p class="lead">
                    Pokiaľ patríte medzi turistických nadšencov a vyznávate nerušený oddych v prírode, tak v našom okolí sa určite nebude nudiť. 
                    V blízkosti sa nachádzajú známe Tematínske vrchy, Považský Inovec a na druhej strane rieky Váhu Javorina.
                </p>
            </div>
        </div>
<hr class="featurette-divider">
    </div>
    </div>
      <hr class="style-four">
    <!--</div>--><!--uzavretie body divu v footri-->