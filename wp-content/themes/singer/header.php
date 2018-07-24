<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>Singer profile</title>
        <meta name="description" content="A simple HTML5 media player with custom controls and WebVTT captions.">
        <meta name="author" content="Sam Potts">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?php echo bloginfo('template_url')?>/"></base>
        <script src="js/jquery-1.9.1.min.js"></script>
        <!-- Styles -->
        <link href="css/video-js.css" rel="stylesheet">
        <!-- Docs styles -->
        <link rel="stylesheet" href="dist/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">

        <style>

          /* Show the controls (hidden at the start by default) */
          .video-js .vjs-control-bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
          }

          /* Make the demo a little prettier */


        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo bloginfo('home')?>"><img src="images/logo-2.png" /></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class=""><a href="<?php echo bloginfo('home')?>">Features</a></li>
                    <li><a href="<?php echo bloginfo('home')?>/videos">Videos</a></li>
                    <li><a href="<?php echo bloginfo('home')?>/term-of-service">Terms of Service</a></li>
                    <li><a href="<?php echo bloginfo('home')?>/privacy">Privacy</a></li>
                    <li><a href="<?php echo bloginfo('home')?>/contact">Contacts</a></li>
                    <li><a href="<?php echo bloginfo('home')?>/about">About</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>
        </header>
