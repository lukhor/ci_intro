<body>
<base href="<?php echo base_url(); ?>" />
<div class="container">
    <!--<h1><a href="”#”">Privat</a></h1>-->

    <!--NAVBAR-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $name ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home">O nás</a></li>
                <li><a href="photos">Fotogaléria</a></li>
                <li><a href="pricelist">Cenník</a></li>
                <li><a href="reservation">Rezervácie</a></li>
                <li class="active"><a href="contact">Kontakt</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <!--Image flex bar-->
    <div id="container">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/img1.jpg" />
                </li>
                <li>
                    <img src="images/img2.jpg" />
                </li>
                <li>
                    <img src="images/img3.jpg" />
                </li>
                <li>
                    <img src="images/img2.jpg" />
                </li>
            </ul>
        </div>
    </div>

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
    <!--</div>--><!--uzavretie divu v footri-->
