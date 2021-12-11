<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 12/11/2021
 * Time: 9:22 PM
 */

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon"
          type="image/png"
          href="<?= base_url()?>assets/images/favicon.png">
    <meta charset="UTF-8">
    <title>Andre & Aisyah wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Spesial mengundang untuk menghadiri pernikahan kami. Aisyah-Andre" />
    <!--<meta name="keywords" content="undangan digital, undangan online, undangan nikah, website undangan, pernikahan, wedding, marriage" />-->
<!--    <meta name="author" content="nikahankami (admin@nikahankami.com)" />-->
    <meta name="robots" content="follow, index" />
    <meta property="og:image" content="assets/images/demoogthumbnail.jpg">
    <meta property="og:image" itemprop="image" content="assets/demoogthumbnail.jpg">
    <link itemprop="thumbnailUrl" href="assets/images/demoogthumbnail.jpg">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="assets/images/demoogthumbnail.jpg">
    </span>
    <meta property="og:image" content="assets/demoogthumbnail.jpg" />
    <meta property="og:title" content="Pernikahan Aisyah-Andre" />
    <meta property="og:description" content="Spesial mengundang untuk menghadiri pernikahan kami. Aisyah-Andre" />
    <link rel="stylesheet" href="assets/css/w35style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>
    <style type="text/css">
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            filter:alpha(opacity=70);
            -moz-opacity:0.7;
            -khtml-opacity: 0.7;
            opacity: 0.7;
            z-index: 100;
            display: none;
        }
        .cnt223 a{
            text-decoration: none;
        }
        .popup{
            width: 100%;
            margin: 0 auto;
            display: none;
            position: fixed;
            z-index: 101;
        }

        /* CORNER ELEMENT  */
        .corner-element{
            position: absolute;
            width: 120px;
        }

        .corner-element.right-center{
            top: 30%;
            /*bottom: 50%;*/
            right: 0;
        }

        .corner-element.left-center{
            top: 50%;
            /*bottom: 50%;*/
            left: 0;
        }

        .corner-element.top-right{
            top: 0;
            right: 0;
        }
        .corner-element.bottom-right{
            right: 0;
            bottom: 0;
            transform: rotate(90deg);

        }
        .corner-element.top-left{
            left: 0;
            top: 0;
            transform: rotate(270deg);

        }
        .corner-element.bottom-left{
            bottom: 0;
            left: 0;
            transform: rotate(180deg);
        }

        .cnt223{
            /* min-width: 600px;*/
            width: 100%;
            min-height: 150px;
            margin: 100px auto;
            background-color: #3E3E3E;
            background-position: center;
            position: relative;
            z-index: 103;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #000;
        }
        .cnt223 p{
            clear: both;
            color: #555555;
            text-align: center;
        }
        .cnt223 p a{
            background-color: #BEA55B;
            text-align: center;
            padding: 20px 30px;
            margin: auto;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }
        .cnt223 p img {
            text-align: center;
            margin: auto;
        }
        .cnt223 .x{
            float: right;
            height: 35px;
            left: 22px;
            position: relative;
            top: -25px;
            width: 34px;
        }
        .cnt223 .x:hover{
            cursor: pointer;
        }

        .imgopenint img {
            width: 100px;
        }

        @media  screen and (min-width: 600px) {
            .imgopenint img {
                width: 100px;
            }
        }

    </style>
    <style>
        * {
            box-sizing: border-box
        }

        .w3-half img{
            margin-bottom: -6px;
            cursor: pointer;
            z-index: -99;
        }

        .w3-half img:hover{opacity: 0.6; transition: 0.3s}


        /* Set height of body and the document to 100% */
        body,
        html {
            margin: 0;
            font-family: Arial;
        }

        @font-face{
            src: url('assets/fonts/Aureliesmith.otf');
            font-family: aureliesmith;
        }

        @font-face{
            src: url('assets/fonts/font_edwarscriptic.ttf');
            font-family: edwardscript;
        }

        @font-face{
            src: url('assets/fonts/font_gelato.otf');
            font-family: gelato;
        }

        @font-face{
            src: url('assets/fonts/font_cookiereg.ttf');
            font-family: cookie;
        }

        @font-face{
            src: url('assets/fonts/font_gadugi.ttf');
            font-family: gadugi;
        }

        /*@font-face{*/
        /*src: url('atemplate/font_galibrireg.ttf');*/
        /*font-family: calibrireg;*/
        /*}*/

        @font-face{
            src: url('assets/fonts/Litine.ttf');
            font-family: litine;
        }

        @font-face{
            src: url('assets/fonts/font_bookmanoldstyle.ttf');
            font-family: bookmanold;
        }

        @font-face{
            src: url('assets/fonts/Angelface.otf');
            font-family: Angelface;
        }

        @font-face{
            src: url('assets/fonts/dosis.ttf');
            font-family: dosis;
        }

        @font-face{
            src: url('assets/fonts/Aldine.ttf');
            font-family: aldine;
        }

        .iconbar {
            position: fixed;
            bottom: 0;
            width: 100%;
            /* background-color: #bababa; */
            background-color: #172740;
            overflow: auto;
            z-index: 999999;
        }

        .iconbar a {
            float: left;
            width: 20%;
            text-align: center;
            padding-top: 5px;
            color: white;
            font-size: 10px;
            transition: all 0.3s ease;
        }

        /* Style tab links */
        .tablink {
            background-color: #2A2A2A;
            /*background-image: url("assets/bgatexture.jpg");
            background-position: center;*/
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            width: 20%;

        }

        .tablink span {
            font-family: dosis;
            font-size: 10px;
            color: white;
        }

        .tablink:hover {
            opacity: 0.9;
            /*background-color: #777;*/
        }


        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
            color: black;
            text-align: center;
            display: none;
            /* padding: 30px 20px; */
            padding-left: 17px;
            padding-right: 15px;
            height: 100%;
            position: relative;
        }

        /* Mulai Diperbaiki */
        .content4pad{
            border:0;
        }
        .wrap-corner{
            position: absolute;
            top: 0;
            left: 0;
            width:100%;
            height:100%;
            z-index: 1;
        }
        .wrap-corner .border {
            border: 2px solid #BEA55B;
            border-radius: 10px;
            width: calc( 100% - 20px);
            height: calc( 100% - 120px);
            position: absolute;
            top: 25px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
        }
        .wrap-corner .ornamentwdbtm {
            position: absolute;
            bottom: 70px;
        }
        .cornerb1, .cornerb2, .corner1, .corner2, .corner3, .corner4{
            width: 300px;
            position: absolute;
        }

        .cornerb1{
            top: 0;
            left: 0;
            /* width: 300px;
            position: absolute;
            z-index: 9; */
        }

        .corner1{
            top: 0;
            left: 0;
            /* width: 300px;
            position: absolute;
            z-index: 9; */
        }

        .cornerb2{
            top: 0;
            right: 0;
            /* width: 300px;
            position: absolute;
            z-index: 9; */
        }

        .corner2{
            top: 0;
            right: 0;
            /* width: 300px;
            position: absolute;
            z-index: 9; */
        }

        .corner3{
            bottom: 0;
            right: 0;
            /* width: 300px;
            position: absolute;
            z-index: 9; */
        }

        .corner4{
            bottom: 0;
            left: 0;
            padding-bottom: 40px;
            /* width: 300px;
            position: absolute;
            z-index: 9; */
        }

        .corner5, .corner6{
            width: 70%;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            z-index: 9;
        }

        .corner5{
            top: 0;
        }

        .corner6{
            bottom: 0;
        }

        /* .corner6{
            width: 70%;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9;
        } */

        /* Akhir Diperbaiki */

        .contentwd {
            position: relative;
            z-index: 99;
        }

        #Cover {
            /*background-color: #ffc2d6;
            background-image: linear-gradient(#ffc2d6, #f79cba);*/
            /*background-image: url("assets/bgatexture.jpg");
            background-position: center;*/
        }

        #Couple {
            background-color: #3E3E3E;
            background-position: center;
        }

        #Eventwd {
            background-color: #3E3E3E;
            background-position: center;
        }

        #Moment {
            background-color: #3E3E3E;
            background-position: center;
        }

        #Quotewd {
            background-color: #3E3E3E;
            background-position: center;
        }

        .explainbride {
            font-family: dosis;
            color: white;
        }

        .bridefont {
            font-family: cookie;
            font-size: 35px;
            color: #BEA55B;
            line-height: 1;
            text-shadow: 2px 2px 2px #222222;
        }

        .fontfront {
            font-family: aldine;
            font-size: 70px;
            color: #cf5f9e;
            text-shadow: 2px 2px 2px grey;
        }


        /*** music box ***/
        .music-box {
            position: fixed;
            width: 300px;
            height: 160px;
            z-index: 9999999;
            bottom: 30px;
            right: 30px;
        }

        @media (max-width: 991px) {
            .music-box {
                width: 50px;
                height: 150px;
                right: auto;
                right:10px;
                top:10px;
            }
        }

        .music-box .music-holder {
            width: 100%;
            height: 100%;
            position: absolute;
            right: 0;
            top: -30px;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
        }

        .music-box .music-holder iframe {
            width: 100%;
            height: 100%;
        }

        .music-box button {
            background: rgba(248, 246, 246, 0.85);
            width: 50px;
            line-height: 37px;
            font-size: 18px;
            font-size: 1rem;
            color: #68192b;
            border: 1px solid #e6e6e6;
            outline: 0;
            padding: 0;
            margin: 0;
            position: absolute;
            right: 0;
            bottom: 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }

        .music-box button i{
            font-size: 20px;
        }

        @media (max-width: 991px) {

            .music-box button {
                right: 0;
                left: auto;
            }
        }

        .music-box .toggle-music-box {
            top: -50px;
            visibility: visible;
            opacity: 1;

        }


        .music {
            padding: 0;
            background: none !important;
            border: none !important;
            position: relative;
            top: 100px;
            left: 180px;
        }

        .music:focus {
            outline: none;
        }

        .fa-stack{
            right:12px;
            top: -65px;
            width: 0;
            height: 0;
        }

        .containerijabwd {
            margin-left: 5%;
            text-align: left;
            font-family: dosis;
            font-size: 14px;
            line-height: 1;
        }

        .containerweddingwd {
            margin-right: 5%;
            text-align: right;
            font-family: dosis;
            font-size: 14px;
            line-height: 1;
        }


        /* jam */
        h1{
            font-family: dosis;
            color: #396;
            font-weight: 100;
            font-size: 40px;
            margin: 40px 0px 20px;
        }

        #clockdiv{
            font-family: dosis;
            color: grey;
            display: inline-block;
            font-weight: 100;
            text-align: center;
            font-size: 30px;
        }
        #clockdiv > div{
            padding: 8px;
            border-radius: 3px;
            /* background: #00BF96;  */
            display: inline-block;
        }
        #clockdiv div > span{
            padding: 10px;
            border-radius: 3px;
            /* background: #00816A;  */
            display: inline-block;
        }

        #day, #hour, #minute, #second {
            font-size: 30px;
            color: white;
            border-bottom: solid 3px white;
        }

        .smalltext{
            padding-top: 2px;
            color:white;
            font-size: 12px;
            font-family: Angelface;
        }

        .ornamentwdtop {
            position: relative;
            margin: 0 auto;
        }

        .ornamentbg{
            position: absolute;
            z-index: -4;
            top: 50px;
            width: 30%;
            opacity: 1;
        }

        .ornamentbg img {
            width: 40%;
        }

        .ornamentwdtop img {
            width: 60%;
        }

        .ornamentwdbtm img {
            width: 40%;
        }

        .timeline h2 {
            color: white;
        }

        @media  screen and (min-width: 600px) {
            .cardevent {
                margin-left: 20%;
                margin-right: 20%;
            }

            .borderpair {
                width: 60%;
            }
        }


        @media screen and (min-width: 900px) {
            .vidline {
                padding-left: 30%;
                padding-right: 30%;
            }

        }


        @media screen and (max-width: 600px) {

            .cornerb1 {
                width: 150px;
            }

            .corner1 {
                width: 200px;
                z-index: 9;
            }

            .cornerb2 {
                width: 200px;
                z-index: 9;
            }

            .corner2 {
                width: 250px;
                z-index: 9;
            }

            .corner3 {
                width: 200px;
                z-index: 9;
            }

            .corner4 {
                width: 250px;
                z-index: 9;
            }

            .corner5 {
                width: 100%;
            }

            .corner6 {
                width: 100%;
            }

            .ornamentbg img {
                width: 100%;
            }

            .ornamentwdtop img {
                width: 100%;
            }

            .ornamentwdbtm img {
                width: 100%;
            }

            .containerijabwd {
                margin-left: 10%;
            }

            .containerweddingwd {
                margin-right: 10%;
            }

            .borderpair {
                width: 100%;
                margin: auto;
            }

        }

        /* comment section */

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #BEA55B;
            width: 100%;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #717037;
        }

        .wishcontainer {
            text-align: left;
            font-family: dosis;
        }

        .wishspace {
            border-radius: 5px;
            /* background-color: #f2f2f2; */
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            color: #404040;
        }

        .wishdisplay {
            text-align: left;
            padding-left: 0px;
            padding-right: 0px;
            font-family: dosis;
            max-height: 400px;
            overflow: scroll;
        }

        .wishdisplayname {
            font-weight: bold;
            font-size: 16px;
        }

        /* width */
        .wishdisplay::-webkit-scrollbar {
            width: 4px;
        }

        /* Handle */
        .wishdisplay::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        .wishdisplay::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

    </style>

    <script type='text/javascript'>
        $(function(){
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.close').click(function(){
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });


            $('.x').click(function(){
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    </script>
</head>

<body>

<div class='popup'>
    <div class='cnt223'>

        <!-- <img src="assets/de20cornerelementri.png" class="corner-element right-center" alt="">
        <img src="assets/de17cornerelement.png" class="corner-element bottom-right" alt="">
        <img src="assets/de20cornerelementle.png" class="corner-element left-center" alt="">
        <img src="assets/de17cornerelement.png" class="corner-element top-left" alt=""> -->

        <p><img src="" width="60%" style="text-align: center"></p>
        <!--<p class="imgopenint"><img class='close' src="assets/demoopenerimg.png" style="text-align: center"></p>-->
        <p class="imgopenint"><img class='close' src="assets/images/fotothumbnail.png" style="text-align: center"></p>

        <p style="text-align: center; line-height: normal; margin-bottom:-10px; color: white">Kepada Yth.<br><span style="font-size:12px">Bapak/Ibu/Saudara/i</span></p>

        <p style="color: #404040; font-size: 20px; font-weight:bold; color: white; padding-bottom:10px; border-radius:4px; text-align: center" id="write"></p>
        </p>
        <p><a href='' id="unmute-sound" class='close'>Buka Undangan</a></p>

        <div style="clear: both;"></div>

        <p><img src="" width="60%" style="transform: rotate(180deg); text-align: center"></p>
    </div>

</div>

<!-- start button pesan via WA -->
<!-- <button onclick="window.location.href='https://api.whatsapp.com/send?phone=6281584067118&text=NikahanKami%0ASaya%20ingin%20pesan%20Undangan%20Digital%20Pernikahan%20seperti%20Demo14'" id="myBtn4" title="Pesan Undangan"><i class="w3-bar-block fa fa-whatsapp"></i> <span style="font-size:12px">Pesan</span></button> -->
<!-- end button pesan via WA -->

<div class="music-box">
    <button class="music-box-toggle-btn">
        <!--
            <i class="fa fa-music"></i> -->
        <audio id='song' loop>
            <source src="assets/songs/pamerbojo.mp3">
        </audio>

        <button type="button" class="music" id="unmute2-sound">
            <img border="0" alt="" src="assets/images/dep8soundoff.png"
                 width="20" height="20">
        </button>
        <button type="button" class="music" id="mute-sound">
            <img border="0" alt="" src="assets/images/dep8soundon.png"
                 width="20" height="20">
        </button>

    </button>
</div>

<div class="iconbar">
    <a class="tablink" onclick="openPage('Cover', this, '#3E3E3E')" id="defaultOpen"><img src="assets/images/de17tab1cover.png" width="35"><br><span>Home</span></a>
    <a class="tablink" onclick="openPage('Couple', this, '#3E3E3E')"><img src="assets/images/de17tab2couple.png" width="35"><br><span>Couple</span></a>
    <a class="tablink" onclick="openPage('Eventwd', this, '#3E3E3E')"><img src="assets/images/de17tab3event.png" width="35"><br><span>Event</span></a>
    <a class="tablink" onclick="openPage('Moment', this, '#3E3E3E')"><img src="assets/images/de17tab4moment.png" width="35"><br><span>Moment</span></a>
    <a class="tablink" onclick="openPage('Quotewd', this, '#3E3E3E')"><img src="assets/images/de17tab5story.png" width="35"><br><span>Story+Wish</span></a>
</div>


<div id="Cover" class="tabcontent">
    <!-- <h3>Home</h3>
    <p>Home is where the heart is..</p> -->

    <ul class="cb-slideshow">
        <li><span>Image 01</span><div><h3>THE WEDDING</h3></div></li>
        <li><span>Image 02</span><div><h3>06 FEBRUARI 2022</h3></div></li>
        <li><span>Image 03</span><div><h3>SAVE.THE.DATE</h3></div></li>
        <li><span>Image 04</span><div><h3></h3></div></li>
        <li><span>Image 05</span><div><h3>AISYAH & ANDRE</h3></div></li>
        <li><span>Image 06</span><div><h3></h3></div></li>
    </ul>
    <div class="container4cover">
        <!--/ Codrops top bar -->
        <header>
            <!-- <div style="line-height:80%; padding-top:60px; padding-left: 60px;transform: rotate(0deg);">
                <h6><span style="font-family: edwardscript; font-size: 35px;">Leiayu & Tripati</span></h6>
                <h6 style="border-bottom:0px solid white; border-top:0px solid white;">And</h6>
                <h6><span style="font-family: edwardscript; font-size: 46px;">Tripati</span></h6>
            </div> -->
            <div style="line-height:80%; padding-top:80px;">
                <h6><span style="font-family: cookie; font-size: 35px">Aisyah & Andre</span></h6>
                <h6>Official Invitation</h6>
            </div>
            <p class="codrops-demos">
                <!--<div class="bride4title">-->
                <!--<h4>Leiayu & Tripati</h4>-->
                <!--</div>-->
                <!--<a href="https://www.sendysaga.com/">Sendysaga</a>-->
                <!--<a class="current-demo" href="http://timerinc.co">Timerinc</a>-->
                <!--<a href="https://www.instagram.com/sendysaga/">Galeri</a>-->
                <!--<a href="https://www.instagram.com/sendysaga/">let's connect!</a>-->
            </p>
            <div id="txt"></div>
        </header>

    </div>

    <div class="wrap-corner">
        <div class="cornerb1">
            <img src="" alt="" width="100%">
        </div>

        <div class="cornerb2">
            <img src="assets/images/dep8oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner5" style="opacity: 1">
            <img src="assets/images/dep8oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="" alt="" width="100%">
        </div>
    </div>

    <div id="homewd" class="contentwd">
        <br>
        <br>
        <br>

    </div>

    <br>
    <br>
</div>

<div id="Couple" class="tabcontent">
    <!-- <h3>News</h3>
    <p>Some news this fine day!</p> -->

    <div class="wrap-corner">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;">
        </div>
        <div class="corner1">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="assets/images/dep8oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="assets/images/dep8oraset4.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="assets/images/dep8oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="assets/images/dep8oraset6.png" alt="" width="100%">
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="border"></div>
    </div> <!--.wrap-corner-->

    <div id="bridewd" class="contentwd">

        <!-- <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;">
        </div> -->
        <br>
        <div class="content4pad">
            <div>
                <br>
                <h3 style="font-family: Angelface; font-size: 35px; color: white;">Bismillahirrahmanirrahim</h3>
                <div class="explainbride">Assalamu`alaikum Warahmatullahi Wabarakatuh<br><br>
                    Maha Suci Allah<br>yang telah menciptakan makhluk-Nya<br>berpasang-pasangan.<br>Ya Allah semoga ridha-Mu tercurah<br>mengiringi pernikahan putra-putri kami:</div>
            </div>
            <br>
            <div><img src="assets/images/fotona.png" width="40%" alt=""><br><span class="bridefont">Nurul Aisyah AMD.Kom<span style="font-size: 13px"></span></span>
            </div>
            <div class="explainbride">Putri kedua dari<br>Bpk. Benny Hadi Purnomo & Ibu (Almh) Yanti Gunarti</div>
            <br>
            <div class="explainbride">dan</div>
            <br>
            <div><img src="assets/images/fotoam.png" width="40%" alt=""><br><span class="bridefont">Andre Saputra Mangindaan S.Kom<span style="font-size: 13px"></span></span>
            </div>
            <div class="explainbride">Putra pertama dari<br>Bpk. (Alm) Anton Mangindaan & Ibu Zulfia Hady</div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <!-- <br>
        <br> -->
        <!-- <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div> -->
        <br>
        <br>
        <br>

    </div>



</div>

<div id="Eventwd" class="tabcontent">

    <div class="wrap-corner">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;">
        </div>
        <div class="corner1">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="assets/images/dep8oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="assets/images/dep8oraset4.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="assets/images/dep8oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="assets/images/dep8oraset6.png" alt="" width="100%">
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="border"></div>
    </div> <!--.wrap-corner-->


    <div id="homewd" class="contentwd">

        <!-- <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div> -->
        <br>
        <div class="content4pad">
            <br>
            <h3 style="font-family: Angelface; font-size: 38px; color: white">Event</h3>
            <p class="explainbride">The Happy Day!</p>
            <p style="font-family: dosis; color: white">Dengan memohon rahmat dan ridha Allah Subhanahu Wa Ta'ala, izinkan kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara pernikahan putra-putri kami</p>

            <div class="cardevent">
                <div class="row">
                    <div class="column" >
                        <div class="card" style="background-color:#2A2A2A;">

                            <div class="containerijabwd">

                                <table style="color: white;">
                                    <tr>
                                        <th style="width: 20%"><img src="assets/images/de8wdakad.png" width="100%"></th>
                                        <th></th>
                                        <th style="width: 80%"><p style="font-size: 18px; font-family: dosis; color: white;"><b>Akad Nikah</b></p></th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><i class="fa fa-calendar"></i></td>
                                        <td>Minggu, 06 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><br></td>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><i class="fa fa-clock-o"></i></td>
                                        <td>09.00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><br></td>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><i class="fa fa-map-marker"></i></td>
                                        <td>Masjid Shodri Asshiddiq</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Jl. Dr. Sumarno,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Penggilingan, Kec. Cakung,</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Kota Jakarta Timur</td>
                                    </tr>
                                    <!-- <tr>
                                        <td></td>
                                        <td><br></td>
                                        <td><br></td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td></td>
                                        <td></td>
                                        <td><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MWZkMWVyODI1cmJzNG9zNzhjaDY2Y25udjEgYWRtaW4tbmlrYWhhbmthbWlAem1haWwubXkuaWQ&tmsrc=admin-nikahankami%40zmail.my.id" target="_blank" style="background-color: #cf5f9e; font-family: dosis; font-size: 18px; color: white; padding: 18px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a></td>
                                    </tr> -->
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="column">
                        <div class="card" style="background-color:#2A2A2A;">
                            <div class="containerweddingwd">

                                <table align="right" style="color: white;">
                                    <tr>
                                        <th align="right" style="width: 80%;"><p style="font-size: 18px; font-family: dosis; color: white; text-align: right;"><b>Resepsi Pernikahan</b></p></th>
                                        <th></th>
                                        <th style="width: 20%"><img src="assets/images/de8wdresepsi.png" width="100%"></th>
                                    </tr>
                                    <tr align="right">
                                        <td>Minggu, 06 Februari 2022</td>
                                        <td><i class="fa fa-calendar"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                        <td><br></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>13.00 - 15.00 WIB</td>
                                        <td><i class="fa fa-clock-o"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                        <td><br></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>Masjid Shodri Asshiddiq</td>
                                        <td><i class="fa fa-map-marker"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>Jl. Dr. Sumarno,</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>Penggilingan,</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>Kec. Cakung,</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td>Jakarta Timur</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td><br></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr align="right">
                                        <td><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MjNtdjU4dTNxazQ1dGhtdGk2aWVtYmozczEgYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #BEA55B; font-family: dosis; font-size: 18px; color: white; padding: 18px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="clear:both"></div>

            <!-- startprotokolkesehatan -->
            <br>
            <div class="explainbride" style="background-color: #2A2A2A; width: 100%; margin: auto; box-shadow: 1px 1px 5px #212121; padding: 10px; border-radius: 10px; color: white;">
                <p><i style="color: white;" class="fa fa-heart"></i><br>
                    Guna mencegah penularan covid-19 kami harapkan kedatangan para tamu undangan tetap menerapkan protokol yang berlaku :
                </p>

                <div style="padding:5px; border-bottom:1px solid #c7c7c7;">
                    Wajib menggunakan masker
                </div>
                <div style="padding:5px; border-bottom:1px solid #c7c7c7;">
                    Menggunakan salam namaste / salam hangat tanpa bersentuhan
                </div>
                <div style="padding:5px; border-bottom:1px solid #c7c7c7;">
                    Saling menjaga jarak di dalam acara
                </div>
                <div style="padding:5px; border-bottom:1px solid #c7c7c7;">
                    Menjaga kebersihan dengan menggunakan handsanitizer
                </div>
            </div>
            <!-- endprotokolkesehatan -->

            <br>
            <div id="clockdiv">
                <div>
                    <span class="days" id="day"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours" id="hour"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes" id="minute"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds" id="second"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>

            <p id="demo"></p>

            <p class="explainbride">Merupakan suatu kehormatan dan kebahagiaan<br>bagi kami apabila Bapak/Ibu/Saudara(i)<br>berkenan untuk hadir dan memberikan do'a restu<br>kepada kedua mempelai.</p>

            <br>

            <div>
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8005853713566!2d110.21351231477622!3d-7.487258394599172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f6aa5ee45b3%3A0xdc07f0e500ac48d6!2sGedung%20Jenderal%20Achmad%20Yani%20Magelang!5e0!3m2!1sid!2sid!4v1610687413981!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3919875114484!2d106.93919031387765!3d-6.211921395503127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b61894bb287%3A0x320a45feba2a00c9!2sMasjid%20Shodri%20Asshiddiq!5e0!3m2!1sen!2sid!4v1639044509710!5m2!1sen!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <!--<div><a href="https://goo.gl/maps/fWm7LDTq3SbK7ohB6" target="_blank" style="background-color: #BEA55B; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>-->
            <div><a href="https://goo.gl/maps/ZhVP1VbQuvrEjvHh8" target="_blank" style="background-color: #BEA55B; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>
            </div>
            <br>
            <br>
        </div>
        <!-- <br>
        <br> -->
        <!-- <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div> -->
        <br>
        <br>
        <br>

    </div>


</div>

<div id="Moment" class="tabcontent">

    <div class="wrap-corner">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;">
        </div>
        <div class="corner1">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="assets/images/dep8oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="assets/images/dep8oraset4.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="assets/images/dep8oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="assets/images/dep8oraset6.png" alt="" width="100%">
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="border"></div>
    </div> <!--.wrap-corner-->


    <div id="homewd" class="contentwd">

        <!-- <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div> -->
        <br>
        <div class="content4pad">
            <br>
            <h3 style="font-family: Angelface; font-size: 38px; color: white">Gallery</h3>
            <p class="explainbride">Momen Bahagia Aisyah-Andre</p>

            <!-- !PAGE CONTENT! -->
            <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">

                <!-- PhotoFrame -->
                <!-- <div class="framegrid2">
                    <div>
                        <img src="assets/demogala.png" width="100%">
                        <br><br>
                        <img src="assets/demogalb.png" width="100%">
                        <br><br>
                        <img src="assets/demogalc.png" width="100%">
                        <br><br>
                        <img src="assets/demogald.png" width="100%">
                    </div>
                </div> -->

                <!-- Photo grid -->
                <div class="w3-row w3-grayscale-min">

                    <!-- <div class="vidline">
                    <video width="100%" controls loop autoplay>
                          <source src="images/andigracevid.mp4" type="video/mp4">
                          <source src="video.ogg" type="video/ogg">
                          Your browser does not support HTML5 video.
                    </video>
                    </div> -->

                    <div class="w3-half">
                        <img src="assets/images/foto11.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/foto2.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/foto3.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/demogal07.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/demogal09.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                    </div>
                    <div class="w3-half">
                        <img src="assets/images/demogal02.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/demogal04.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/demogal06.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/demogal08.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                        <img src="assets/images/demogal10.jpg" style="width:100%" onclick="onClick(this)"
                             alt="AndreAisyah">
                    </div>
                </div>

                <!-- Modal for full size images on click-->
                <div id="modal01" class="w3-modal w3-black" style="padding-top:0;" onclick="this.style.display='none'">
                    <span class="w3-button w3-black w3-xlarge w3-display-topleft">×</span>
                    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                        <img id="img01" class="w3-image">
                        <p id="caption"></p>
                    </div>
                </div>
                <br>

                <br>


            </div>
        </div>
        <!-- <br>
        <br> -->
        <!-- <div>

            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
            </div>

        </div> -->
        <br>
        <br>
        <br>

    </div>
</div>

<div id="Quotewd" class="tabcontent">

    <div class="wrap-corner">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;">
        </div>
        <div class="corner1">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="assets/images/dep8oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="assets/images/dep8oraset4.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="assets/images/dep8oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="assets/images/dep8oraset6.png" alt="" width="100%">
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="border"></div>
    </div> <!--.wrap-corner-->

    <div id="homewd" class="contentwd">

        <!-- <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
        </div> -->
        <br>
        <div class="content4pad">
            <br>
            <h3 style="font-family: Angelface; font-size: 38px; color: white">Story</h3>
            <p class="explainbride">Kisah Bahagia Aisyah-Andre</p>
            <p class="explainbride">--</p>
            <p class="explainbride">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
            <p class="explainbride"><b>- QS. Ar-Rum: 21 -</b></p>
            <p class="explainbride">--</p>

            <!-- !PAGE CONTENT! -->
            <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">

                <!-- timeline start -->

                <div class="timeline">
                    <div class="container left">
                        <div class="content">
                            <div class="bg1content">
                                <h2><span style="font-size: 14px"></span>2016</h2>
                                <p>Kami pertama kali bertemu satu sama lain di sebuah acara peminatan di kampus. Kami berkenalan karena kami menjadi perwakilan masing-masing divisi kegiatan yang kami selenggarakan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <div class="bg1content">
                                <h2><span style="font-size: 14px"></span>2018</h2>
                                <p>Setelah lama tidak bertemu akhirnya kami bertemu kembali di sebuah acara seminar profesional. Kebetulan kami berada di bidang yang sama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <div class="bg1content">
                                <h2><span style="font-size: 14px"></span>2020</h2>
                                <p>Salah satu momen yang tidak disangka, Ken melamar saya dengan langsung menyatakan keinginannya kepada ayah saya. Kami pun bersiap dengan petualangan baru.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <div class="bg1content">
                                <h2><span style="font-size: 14px"></span>2021</h2>
                                <p>Momen spesial kami akan dimulai dari titik ini, momen kebahagiaan kami bersama membangun keluarga kecil kami. Semoga Allah SWT memberikan keberkahan untuk pernikahan kami.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- timeline end -->



                <br>

                <div class="">
                    <p class="explainbride">Ucapan Selamat & Doa untuk<br>Aisyah-Andre</p>
                </div>

                <div class="wishspace">
                    <div class="wishcontainer">


                        <form action="" method="post">
                            <label for="nama" style="color:white;">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Nama.." required>

                            <label for="ucap" style="color:white;">Ucapan</label>
                            <textarea id="ucap" name="ucap" placeholder="Ucapan Doa & Harapan.." style="height:100px" required></textarea>

                            <input type="submit" name="submit" value="Send">
                        </form>
                    </div>

                    <br>
                    <div class="wishdisplay">
                        <table>
                            <tr>
                                <td style="" valign="top">
                                    <img src="assets/images/dep8wish4ava.png" width="25px">
                                </td>
                                <td style="background-color: #2A2A2A; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                                    <div class="wishdisplayname">
                                        Riyandanu
                                    </div>
                                    <div class="" style="padding-bottom: 10px">
                                        Selamat untuk Andre dan Aisyah, Semoga dilancarkan segala urusannya yaa, kelak
                                        menjadi keluarga yang Sakinah Mawadah Warohmah, selalu diberikan kebahagiaan dan
                                        keberkahan selalu, serta cepet dapet momongan, aamiin
                                    </div>
                                </td>

                            </tr>

                        </table>
                    </div>

                    <br>
                    <!-- <br> -->
                </div>

            </div>
        </div>
        <!-- <br>
        <br>
        <div>

            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="" alt="" style="display: inline-block;" width="100%">
            </div>

        </div> -->
        <br>
        <br>
        <br>

    </div>
</div>

<script>
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();


    document.getElementById('mute-sound').style.display = 'none';
    document.getElementById('unmute-sound').addEventListener('click', function (event) {
        document.getElementById('unmute2-sound').style.display = 'none';
        document.getElementById('mute-sound').style.display = 'inline-block';
        document.getElementById('song').play();
    });

    document.getElementById('unmute2-sound').addEventListener('click', function (event) {
        document.getElementById('unmute2-sound').style.display = 'none';
        document.getElementById('mute-sound').style.display = 'inline-block';
        document.getElementById('song').play();
    });

    document.getElementById('mute-sound').addEventListener('click', function (event) {
        document.getElementById('mute-sound').style.display = 'none';
        document.getElementById('unmute2-sound').style.display = 'inline-block';
        document.getElementById('song').pause();
    });


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    var deadline = new Date("february 06, 2022 13:00:00").getTime();

    var x = setInterval(function () {

        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("day").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML = seconds;
        if (t < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "HAPPY WEDDING";
            document.getElementById("day").innerHTML = '0';
            document.getElementById("hour").innerHTML = '0';
            document.getElementById("minute").innerHTML = '0';
            document.getElementById("second").innerHTML = '0';
        }
    }, 1000);


    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    var sn = getParameterByName('to');

    document.getElementById("write").innerHTML = sn;

</script>
<script type="text/javascript" src="assets/js/jquery-1.10.1.min.js"></script>

<!--<script>-->
<!--    //Get the button-->
<!--    var mybutton = document.getElementById("myBtn4");-->
<!---->
<!--    // When the user scrolls down 20px from the top of the document, show the button-->
<!--    window.onscroll = function() {scrollFunction()};-->
<!---->
<!--    function scrollFunction() {-->
<!--        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {-->
<!--            mybutton.style.display = "block";-->
<!--        } else {-->
<!--            mybutton.style.display = "none";-->
<!--        }-->
<!--    }-->
<!---->
<!--</script>-->



</body>

</html>

