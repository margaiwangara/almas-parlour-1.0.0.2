<?php
//initialize session
session_start();

//variables to strore link data
$user_email = NULL;

if(!empty($_SESSION['USER_EMAIL']))$user_email = $_SESSION['USER_EMAIL'];

$not_member =
            '<ul class="nav navbar-nav navbar-right">
            <li><a href="../almas-parlour/create-account-face.php"><span class="glyphicon glyphicon-user"></span> Create Account</a></li>
            <li><a href="../almas-parlour/access-account-face.php"><span class="glyphicon glyphicon-log-in"></span> Access Account</a></li>
            </ul>';
$member =
            '<ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">'.substr($user_email,0,strpos($user_email,'@')).'
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#edit-account">Account Details</a> </li>
                        <li><a href="../almas-parlour/destroy-session-test.php">Sign Out</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-globe" style="font-size:20px;"></i></a></li>
            </ul>';

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
    <link rel="stylesheet" href="styles/master-style.css">
    <link rel="stylesheet" href="styles/body-style.css">
    <link rel="stylesheet" href="styles/added-styles.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/collective_action.js" type="text/javascript"></script>
    <script src="js/product-control.js" type="text/javascript"></script>
    <script src="js/cart-erise.js" type="text/javascript"></script>
    <script src="js/cart-display.js" type="text/javascript"></script>
    <script src="js/user-info.js" type="text/javascript"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="page-header">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand logo-text" href="/../almas-parlour/index.php">
            <img src="images/logo.png" alt="logo-image" height="70" width="70" style="position: absolute;top: 0.6%;left: 4.3%;"/>
                alma's parlour
            </a>
        </div>
        <div class="collapse navbar-collapse" id="">
        <form class="navbar-form navbar-right">
            <div class="input_group">
                <button type="button" class="btn btn-default btn-md">
                    <i class="glyphicon glyphicon-heart"></i> Favourites
                    <span class="badge"></span>
                </button>
                <button type="button" class="btn btn-default btn-md">
                    <i class="glyphicon glyphicon-shopping-cart"></i> Basket
                    <span class="badge item-count"></span>
                </button>
                <input type="hidden" value="<?php echo $user_email;?>" id="user_id"/>
            </div>
        </form>
        <?php
            if(!empty($_SESSION['USER_EMAIL']))
            {
                //echo $user_email;
                $user_email = $_SESSION['USER_EMAIL'];
                echo $member;
            }
            else
                echo $not_member;
        ?>
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse links-area">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/../almas-parlour/index.php">HOME</a></li>
                <li><a href="/../almas-parlour/about-us.php">ABOUT US</a></li>
                <li><a href="/../almas-parlour/item-dresses.php">PRODUCTS</a></li>
                <li><a href="/../almas-parlour/contact-us.php">CONTACT US</a></li>
            </ul>
            <form class="navbar-form navbar-right" style="width: 30%;">
                <div class="input-group " style="width: 100%;">
                    <input type="text" class="form-control" placeholder="Search Items..."/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
<div id="edit-account" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Account Details</h3>
            </div>
            <div class="modal-body">
                <form action="" method="get" id="update-form">
                    <div class="form-group">
                        <input type="text" placeholder="Address Name" class="form-control ad-name" name="addr_name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control name" name="user_name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Surname" class="form-control surname" name="user_surname">
                    </div>
                    <div class="form-group">
                        <input type="Email" placeholder="someone@example.com" class="form-control" name="user_email" value="<?php if($user_email) echo $user_email;?>" readonly>
                    </div>
                    <div class="form-group">
                        <select class="form-control user_cities" name="user_city">
                            <option value="Nairobi"selected>Nairobi</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Eldoret">Eldoret</option>
                            <option value="Nakuru">Nakuru</option>
                            <option value="Kakamega">Kakamega</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control addr" rows="5" placeholder="Address" style="resize: none;" name="user_addr"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="update-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!--<div class="items-area">-->
<div class="container-fluid items-display">
    <!--<footer class="body-footer"></footer>-->