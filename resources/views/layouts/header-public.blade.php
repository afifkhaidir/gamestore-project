<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kujang Game Store</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Select Css -->
    <link href="{{ URL::to('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
    
    <!-- Bootstrap Core Css -->
    <link href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ URL::to('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::to('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ URL::to('assets/css/themes/all-themes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::to('assets/css/SimpleStarRating.css') }}">
        <style>
            body {
                background-color: #999;
                font-family: sans-serif;
                margin: 0;
            }

            main {
                background-color: white;
                width: 80%;
                margin: 0 auto;
                padding: 50px;
                text-align: center;
            }

            table {
                display: inline-block;
            }

            td {
                padding: 1em;
            }

            .golden {
                color: #ee0;
                background-color: #444;
            }

            .big-red {
                color: #f11;
                font-size: 50px;
            }
            .container {
              position: relative;
              width: 100%;
            }

            .image {
              display: block;
              width: 100%;
              height: auto;
            }

            .bottomright {
                position: absolute;
                bottom: 5px;
                right: 25px;
                font-size: 18px;
            }

            .overlay1 {
              position: absolute;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              opacity: 0;
              transition: .5s ease;
              background-color:rgba(255,0,0,1);
            }

            .container:hover .overlay1 {
              opacity: 1;
            }

            .text {
              color: white;
              font-size: 20px;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
            }
            .img-circle {
                border-radius: 50%;
                border-width: 1px;
                border-color: Black;
            }
            .border-radius {
                border: 2px solid #CC0000;
                padding: 5px 40px; 
                background: #e50000;
                width: 150px;
                border-radius: 25px;
            }
            </style>
</head>

<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ url('/') }}"><p><img src="{{ asset('img_game/logo.png') }}" width="30" height="30" alt="User Image">KUJANG GAME STORE </p></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!--<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    @if(!Auth::user())
                      <li data-toggle="tooltip" title="Signin" class="pull-right"><a href="{{ url('/login') }}"><i class="material-icons" title="Login">input</i> Signin</a></li>
                      <li data-toggle="tooltip" title="Signup" class="pull-right"><a href="{{ url('/register') }}"><i class="material-icons" title="Register">person_add</i> Signup</a></li>
                    @else
                        <li data-toggle="tooltip" title="Signout" class="pull-right"><a href="{{ url('/logout') }}"><i class="material-icons">input</i> Signout</a></li>
                        <li class="nav-icons hidden-sm pull-right">
      			            <a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Achievements"><i><img src="http://nanoup.net/assets/img/navbar-achievement.png"></i><span class="text-hidden">  Achievements</span></a>
    		            </li>
                        <li class="nav-icons hidden-sm pull-right">
                            <a data-toggle="tooltip" data-placement="bottom" title="" href="#" data-original-title="Favorites"><i><img src="http://nanoup.net/assets/img/navbar-favorites.png"></i><span class="text-hidden">  Favorites</span></a>
                        </li>
                        <li data-toggle="tooltip" title="Coint" class="pull-right"><a href="{{ url('/userprofile') }}"><i><img src="http://nanoup.net/assets/img/icon-coin.png"></i> {{ Auth::user()->coint}}</a> </li>
                        <li data-toggle="tooltip" title="User" class="pull-right"><a href="{{ url('/userprofile') }}"><i class="material-icons" title="User">person</i>  {{ Auth::user()->name}}</a> </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section class="content1">
            <!-- Custom Content -->
            <div class="body">
                <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive center-block" src="{{ asset($slider[0]->img_slider) }}" />
                        </div>
                        <div class="item">
                            <img  class="img-responsive center-block" src="{{ asset($slider[1]->img_slider) }}" />
                        </div>
                        <div class="item">
                            <img class="img-responsive center-block" src="{{ asset($slider[2]->img_slider) }}" />
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="{{ url('/') }}">
                    <i class="material-icons">select_all</i>
                    <span>All</span>
                </a>
                <a href="{{ url('/action') }}">
                    <i class="material-icons">videogame_asset</i>
                    <span>Action</span>
                </a>
                <a href="{{ url('/casino') }}">
                    <i class="material-icons">videogame_asset</i>
                    <span>Casino</span>
                </a>
                <a href="{{ url('/adventure') }}">
                    <i class="material-icons">videogame_asset</i>
                    <span>Adventure</span>
                </a>
                <a href="{{ url('/puzzle') }}">
                    <i class="material-icons">videogame_asset</i>
                    <span>Puzzle</span>
                </a>
                <a href="{{ url('/sports') }}">
                    <i class="material-icons">videogame_asset</i>
                    <span>Sports</span>
                </a>
            </div>
    