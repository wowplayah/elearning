<?php
include 'WebConfig/WebConfig.php';
$webConfig = new webConfigGlobalControl();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Training</title>
    <!--Css Family-->
    <link href="Content/PackageBakcEnd/Bootstrap4/bootstrap.css" rel="stylesheet" />
    <link href="Content/PackageBakcEnd/Bootstrap4/Site.css" rel="stylesheet" />
    <!--Js Family-->
    <script src="Content/PackageBakcEnd/Javascript/Bootstrap4Required/jquery-3.3.1.js"></script>
    <script src="Content/PackageBakcEnd/Javascript/Bootstrap4Required/bootstrap.js"></script>
    <script src="Content/PackageBakcEnd/Javascript/Bootstrap4Required/jquery-3.2.1.slim.min.js"></script>
    <script src="Content/fontawesome-free-5.0.6/on-server/js/fontawesome-all.js"></script>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-md navbar-dark  fixed-top bg-mms ">
        <a href="#" class="navbar-brand"></a>
        <a href="./" class="navbar-brand">
            <!--<img src="Content/PackageBakcEnd/Bootstrap4/img-logo/mms.png" width="250" />-->
            Smart Training
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./"><i class="fa fa-home"></i> Beranda</a>
                </li>
                <li class="nav-item">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Sandika G Prakasa</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="kelolauser">Kelola User</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
        
            <a class="nav-link" href="administrasi"><i class="fa fa-book"></i> ADMINISTRASI</a>
            <a class="nav-link" href="matalatihan"><i class="fa fa-book"></i> MATA LATIHAN</a>
            <a class="nav-link" href="pbk"><i class="fas fa-handshake"></i> PBK</a>
            <a class="nav-link" href="daftarsoal"><i class="fas fa-handshake"></i> SOAL</a>
        </nav>
    </div>


    <?php include 'App_Start/RootBackEnd.php'; ?>
    

    <script src="Content/PackageBakcEnd/Javascript/Bootstrap4Required/offcanvas.js"></script>
</body>
</html>
