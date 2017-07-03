
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Login Page - Material Design by Deadlock</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{ URL::to('/') }}/css/material-kit.min.css" rel="stylesheet"/>
    </head>

    <body class="login-page">
       <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Navbar</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo.png" alt="logo" class="img-responsive navbar-brand">
                    </a>
                </div>

                <div class="collpase navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('signupView') }}">
                                <i class="material-icons">account_balance</i> Home
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">book</i> Pages
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="{{ route('aboutUsView') }}">
                                        <i class="material-icons">account_circle</i> About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('postListView') }}">
                                        <i class="material-icons">room</i> Post List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contactUsView') }}">
                                        <i class="material-icons">send</i> Contact Us
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">attachment</i> User Page
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="{{ route('loginView') }}">
                                        <i class="material-icons">security</i> Login
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('profileView') }}">
                                        <i class="material-icons">toys</i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('signupView') }}">
                                        <i class="material-icons">videogame_asset</i> Sign Up
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>