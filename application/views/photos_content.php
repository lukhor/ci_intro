<body>

<script>
    $(document).ready(function () {
        /*FANCY SCRIPT*/
        $(".fancybox").fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            arrows: true,

            helpers: {
                overlay: {
                    css: {
                        'background': 'rgba(0, 0, 0, 0.9)'
                    }
                }/*,
                title: {
                    type: 'outside'
                },
                thumbs: {
                    width: 50,
                    height: 50
                },
                buttons: {}*/
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
                        <li class="active">
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
                         <li<?php if($this->session->userdata("lang")=="slovak"){echo " class='active'";}?>>
                            <?php
                            $this->session->set_userdata("page", "photos");
                            echo anchor("site/change/slovak","SK");
                            ?>
                        </li>
                        <li<?php if($this->session->userdata("lang")=="english"){echo " class='active'";}?>>
                            <?php
                            $this->session->set_userdata("page", "photos");
                            echo anchor("site/change/english", "ENG") ;
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
<!--<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
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
</div>-->

<!-- ======= weather div -->
<div id="weather" class="weatherFeed" style="display: none"></div>

<div class="content">
	 
<div class="container" >
    <!--CONTENT-->
    <div class="row">
        <div class="col-lg-12 text-center">
        	
        	<hr class="featurette-divider2">
            <h1 class="posundole"><?php echo label('veta11', $this); ?></h1>
            <hr class="style-down">
            <?php
                /*GENEROVANIE FOTOGALÉRIE*/
                /*<a class="fancybox" rel="gallery1" href="images/img1.jpg" title="izba číslo 1">
                    <img src="images/img1.jpg" alt=""/>
                </a>*/
                for($i = 1;$i < 21;$i++){
                    $image = "<a class='fancybox' rel='gallery1' href='images/nearby/".$i.".jpg' title='image'><img src='images/nearby/".$i."_t.jpg' alt='image'/></a>\n";
                    echo $image;
                }

            ?>
            <hr class="featurette-divider">
            <h1><?php echo label('veta12', $this); ?></h1>
            <hr class="style-down">
            <?php
                for($i = 1;$i < 21;$i++){
                    $image = "<a class='fancybox' rel='gallery1' href='images/accomodation/".$i.".jpg' title='image'><img src='images/accomodation/".$i."_t.jpg' alt='image'/></a>\n";
                    echo $image;
                }
            ?>
        </div>
    </div>
    <hr class="featurette-divider">
</div>
</div>
  <hr class="style-four">
<!--</div>--><!--uzavretie divu v footri-->