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
    <script src="Content/PackageBakcEnd/Bootstrap4/fontawesome-free-5.0.6/on-server/js/fontawesome-all.js"></script>
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
                    <a class="nav-link" href="#"><i class="fa fa-edit"></i> Pendaftaran</a>
                </li>
                <li class="nav-item">
            </ul>
        </div>
    </nav>



    <?php include 'App_Start/RootFrontEnd.php'; ?>
    

    <script src="Content/PackageBakcEnd/Javascript/Bootstrap4Required/offcanvas.js"></script>
</body>
</html>
