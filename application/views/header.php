<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <base href="<?php echo base_url();?>" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!--<style>
        body, html{margin:0; padding:0;}

        body{
            background-color: #EEE;
        }

        h1, h2, h3, h4, p, a, li, ul{
            font-family: arial,sans-serif;
            color: black;
            text-decoration: none;
        }

        #navigation{
            margin: 50px auto 0 auto;
            width: 1000px;
            background-color: #888;
            height: 15px;
            padding: 20px;
        }

        #navigation a:hover{
            color: green;
        }

        #navigation ul{
            list-style: none;
            float: left;
            margin: 0 50px;
        }

        #navigation ul li{
            display: inline;
        }

        #content{
            width: 1000px;
            min-height: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        #footer{
            width: 400px;
            height: 15px;
            margin: 0 auto;
            padding: 20px;
        }

        #footer p{
            color: #777;
        }


    </style>-->

    <style>
        .frame_area{


        }

        .single_frame{

            float:left;
            width:20px;
            height: 200px;
            background: red;
        }
    </style>

    <link rel="stylesheet" media="all" href="lessframework.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>

</body>

</html>
<body>

<div class="frame_area">
    <div class="single_frame"></div>
    <div class="single_frame"></div>
    <div class="single_frame"></div>
    <div class="single_frame"></div>
</div>

<div id="container">
    <div id="navigation">
        <ul>
            <li><a href="home">O nás</a></li>
            <li><a href="photos">Fotogaléria</a></li>
            <li><a href="pricelist">Cenník</a></li>
            <li><a href="reservation">Rezervácie</a></li>
            <li><a href="contact">Kontakt</a></li>
        </ul>
    </div>