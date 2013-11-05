<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Privát Piešťany 222</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/bootstrap"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider();
        });
    </script>
</head>

<body>
<div class="container">
    <h1><a href="”#”">Privát Piešťany 222</a></h1>

    <!--NAVBAR-->
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

<!--carousel 1
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active">
                <img src="application/imgs/img1.jpg" alt="img1">
                <div class="carousel-caption">
                   <p>img1</p>
                </div>
            </div>
            <div class="item">
                <img src="application/imgs/img2.jpg" alt="img2">
                <div class="carousel-caption">
                    <p>img2</p>
                </div>
            </div>
            <div class="item">
                <img src="application/imgs/img3.jpg" alt="img3">
                <div class="carousel-caption">
                    <p>img3</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyph icon icon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyph icon icon-chevron-right"></span>
        </a>
    </div>
    -->
    <!--Carousell 2-->
    <!--<div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <img src="application/imgs/img1.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="application/imgs/img2.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a class="btn btn-large btn-primary" href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="application/imgs/img2.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>-->

    <!--Image flex bar-->
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

    <!--content-->

    <div class="row">
        <div class="col-md-4">
            <ul class="nav nav-list">
                <li class="nav-header">What we are?</li>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Our Clients</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li class="nav-header">Our Friend</li>
                <li><a href="#">Google</a></li>
                <li><a href="#">Yahoo!</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Microsoft</a></li>
                <li><a href="#">Gadgetic World</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <h3>How we started ?</h3>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

            <h3>How do we market?</h3>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4 class="muted text-center">Meet Our Clients</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <a href="#" class="btn"><i class="icon-user"></i> Our Clients</a>
        </div>
        <div class="col-md-3">
            <h4 class="muted text-center">Know Our Employees</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <a href="#" class="btn btn-success"><i class="icon-star icon-white"></i> Our Employees</a>
        </div>
        <div class="col-md-6">
            <h4 class="muted text-center">Reach Us</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <a href="#" class="btn btn-info">Contact Us</a>
        </div>
    </div>

    <hr>
    <div class="footer">
        <p>&copy; 2013</p>
    </div>
</div>
