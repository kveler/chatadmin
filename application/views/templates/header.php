<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= TITLE ?></title>

    <meta name="viewport" content="width=device-width, user-scalable=yes">

    <!--css-->
    <link href="application/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="application/assets/css/dashboard.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>

    <!--css end-->

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--jquery end-->
    <script src="application/assets/js/bootstrap.min.js"></script>

</head>
<body>

<!--wrapper-->
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?c=index&m=page&a=dashboard">Chat panel</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?c=index&m=page&a=dashboard">Dashboard</a></li>
                    <li><a href="?c=index&m=page&a=settings">Settings</a></li>
                    <li><a href="?c=index&m=page&a=profile">Profile</a></li>
                    <li><a href="?c=index&m=page&a=help">Help</a></li>
                    <li><a href="?c=index&m=page&a=logout">Logout</a></li>
                </ul>
               <!-- <form class="navbar-form navbar-right">
                   SEARCH BAR     <input type="text" class="form-control" placeholder="Search...">
                </form> -->
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="?c=index&m=page&a=dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
                    <li><a href="?c=index&m=page&a=chats">Chats <span class="badge">0</span></a></li>
                    <li><a href="?c=index&m=getTicketData">Tickets</a></li>
                    <li><a href="?c=index&m=getUserData">Users</a></li>
                    <li><a href="?c=index&m=getOperatorsData">Operators</a></li>
                    <li><a href="?c=index&m=page&a=settings">Settings</a></li>
                </ul>
                <!-- <ul class="nav nav-sidebar">
                    <li><a href="">Nav item</a></li>
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                    <li><a href="">More navigation</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                </ul> -->
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">





