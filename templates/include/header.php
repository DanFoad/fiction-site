<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $results["pageTitle"] ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
    <meta name="author" content="Dan Foad" />
    <meta name="description" content="" />

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php echo $GLOBALS["documentroot"]; ?>/style/main.css" />

    <link rel="icon" type="image/png" href="favicon.png" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <header class="header">
        <h1 class="header__title">Fiction Site</h1>

        <nav class="header__topnav">
            <ul>
                <li class="header__link"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li class="header__link"><a href="#"><i class="fa fa-folder-open-o"></i>Browse</a></li>
                <li class="header__link"><a href="#"><i class="fa fa-commenting-o"></i>Messages</a></li>
                <li class="header__link"><a href="#"><i class="fa fa-bell-o"></i>Notifications</a></li>
            </ul>
        </nav>

        <aside class="header__options">
            <a href="#"><i class="fa fa-cogs"></i></a>
            <a href="#"><i class="fa fa-sign-out"></i></a>
            <div class="switch">
                <input id="settings__online" type="checkbox" autocomplete="off" checked="checked" />
                <label for="settings__online"></label>
            </div>
        </aside>
    </header>

    <div class="body">
        <nav class="sidebar">
            <div class="sidebar__profile">
                <span class="avatar avatar--online"><img src="http://placehold.it/128x128/ffffff" alt="" /></span>
                <h2>Example User</h2>
                <ul class="sidebar__external">
                    <li class="external__link"><a href="#"><i class="fa fa-link"></i> example.com</a></li>
                </ul>
            </div>

            <hr class="fade fade--toleft" />

            <dl class="sidebar__menu">
                <dt>Main Menu</dt>
                <dd class="sidebar__link"><a href="#"><i class="fa fa-user"></i>Profile</a></dd>
                <dd class="sidebar__link"><a href="#"><i class="fa fa-book"></i>Stories</a></dd>
                <dd class="sidebar__link"><a href="#"><i class="fa fa-star-o"></i>Favourites</a></dd>
                <dd class="sidebar__link"><a href="#"><i class="fa fa-question"></i>Random Story</a></dd>
                <dd class="sidebar__link"><a href="#"><i class="fa fa-info-circle"></i>FAQ</a></dd>
            </dl>
        </nav>

        <main role="main">
