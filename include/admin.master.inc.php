<?php

//start session
session_start();

//open if admin is logged in else redirect to login page
if(isset($_SESSION['ADMIN_EMAIL']))
    echo "Welcome Admin";
else
{
    header("Location: admin-login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="almas parlour, almasparlour,almasparlour.co.ke">
    <meta name="author" content="Margai W.">

    <!--All CDNs and other page links go after here-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/master-style.css">
    <link rel="stylesheet" href="../styles/body-style.css">
    <link rel="stylesheet" href="../styles/admin.design.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="../js/admin.view-products.js" type="text/javascript"></script>-->
    <script src="../js/admin.add-item.js" type="text/javascript"></script>
    <script src="../js/collective_action.js" type="text/javascript"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="page-header">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand logo-text" href="../admin/index.php">alma's parlour</a>
        </div>
    </div>
    <div class="navbar-right">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo substr($_SESSION['ADMIN_EMAIL'],0,strpos($_SESSION['ADMIN_EMAIL'],'@'));?>
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="../almas-parlour/destroy-session-test.php">Sign Out</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-globe" style="font-size:20px;"></i></a></li>
    </ul>
    </div>
    <!--Some code goes here-->
</div>
<nav class="navbar navbar-inverse links-area">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="../admin/index.php">HOME</a></li>
            <li><a href="../admin/view-products.php">VIEW PRODUCTS</a></li>
            <li><a href="../admin/admin-users.php">VIEW USERS</a></li>
            <li><a href="../admin/admin-panel.php">ADMIN PANEL</a></li>
        </ul>
    </div>
</nav>

<div class="container">