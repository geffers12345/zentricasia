<!DOCTYPE html>
<html>
<head  lang="en">
    <title>Zentric Power Asia</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="js/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("mySidenav").style.background = "#111";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.background = "none";
        }
    </script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function() {
                $(".slidesanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slides");
                    }
                });
            });
        })
    </script>
</head>
<body>
<nav class="nabby navbar-fixed-top" id="nav-first"data-spy="affix" data-offset-top="1">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" onclick="openNav()" style="border:1px solid white">
                <span class="menu">&#9776; </span>
            </button>
            <a class="navbar-brand"><img src="images/zpa.png" width="125px"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="hober"><a href="index.php" style="color: white">
                        <span class="glyphicon glyphicon-home"></span>&nbsp; HOME</a></li>
                <li><a href="/services" style="color: white">
                        <span class="glyphicon glyphicon-wrench"></span>&nbsp; RESOURCES</a></li>
                <li><a href="/events" style="color: white">
                        <span class="glyphicon glyphicon-calendar"></span>&nbsp; TRAINING SCHEDULES</a></li>
                <li><a href="/gallery" style="color: white">
                        <span class="glyphicon glyphicon-picture"></span>&nbsp; GALLERY</a></li>
                {{--<li><a href="/contact" style="color: white">--}}
                        {{--<span class="glyphicon glyphicon-phone"></span>&nbsp; CONTACT</a></li>--}}
                <li><a href="/about" style="color: white">
                        <span class="glyphicon glyphicon-info-sign"></span>&nbsp; ABOUT US</a></li>
                <li><a href="/login" style="color: white">
                        <span class="glyphicon glyphicon-log-in"></span>&nbsp; LOG IN</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="carousel-height">
    <div class="shadow"></div>

    <!-- caption -->
    <div class="caption">
        <h1 class="slides">YOUR BUSINESS PARTNER</h1>
        <div class="border"></div>
        <h5 class="slides">A Management Consulting Provider</h5>
        <h5 class="slides">Formed by a Group of Professionals, Specializing on wide Facets of Business.</h5>

    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slidess -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/Groupie 1.jpg" alt="Los Angeles" style="width:100%;height:570px;">
            </div>
            <div class="item">
                <img src="images/30126091_1940720879331299_714083999_o.jpg" alt="Chicago" style="width:100%;height:570px;">
            </div>
            <div class="item">
                <img src="images/30177172_1940720872664633_77956471_o.jpg" alt="New york" style="width:100%;height:570px;">
            </div>
            <div class="item">
                <img src="images/30223475_1940720939331293_167281425_o.jpg" alt="New york" style="width:100%;height:570px;">
            </div>
        </div>
    </div>
</div>
<!-- mySidenav -->
<div id="mySidenav" class="sidenav navbar-toggle" >
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul style="list-style:none;padding-left:0">
        <li class="right-bar">
            <a href="index.php" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H O M E
            </a>
        </li>
        <li class="right-bar">
            <a href="/services" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S E R V I C E S
            </a>
        </li>
        <li class="right-bar">
            <a href="/events" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E V E N T S
            </a>
        </li>
        <li class="right-bar">
            <a href="/gallery" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; G A L L E R Y
            </a>
        </li>
        <li class="right-bar">
            <a href="/contact" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C O N T A C T
            </a>
        </li>
        <li class="right-bar">
            <a href="/about" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A B O U T  U S
            </a>
        </li>
        <li class="right-bar">
            <a href="/login" style="color: white">&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L O G I N
            </a>
        </li>
    </ul>
</div>
</body>
</html>