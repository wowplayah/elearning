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
    <title>Membership Management</title>
    <!--Css Family-->
    <link href="Content/PackageAuth/Bootstrap4/bootstrap.css" rel="stylesheet" />
    <link href="Content/PackageAuth/Bootstrap4/Site.css" rel="stylesheet" />
    <!--Js Family-->
    <script src="Content/PackageAuth/Javascript/Bootstrap4Required/jquery-3.3.1.js"></script>
    <script src="Content/PackageAuth/Javascript/Bootstrap4Required/bootstrap.js"></script>
    <script src="Content/PackageAuth/Javascript/Bootstrap4Required/jquery-3.2.1.slim.min.js"></script>
    <script src="Content/PackageAuth/Bootstrap4/fontawesome-free-5.0.6/on-server/js/fontawesome-all.js"></script>
</head>
<body>

    <div class="container-fluid body-content">
        <?php include 'App_Start/RootAuth.php'; ?>
    </div>

    <script src="Content/PackageAuth/Javascript/Bootstrap4Required/offcanvas.js"></script>
</body>
</html>
