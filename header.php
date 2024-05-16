<?php
$db = new Database();
$db->select('options', 'site_name,site_logo,currency_format');
$header = $db->getResult();

$cur_format = '$';
if (!empty($header[0]['currency_format'])) {
    $cur_format = $header[0]['currency_format'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php if (isset($title)) { ?>
        <title><?php echo $title; ?></title>
    <?php } else { ?>
        <title>Indian Coffee Bazaar</title>
    <?php } ?>
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
   
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/65e503efa4.js" crossorigin="anonymous"></script>
    <style>
        .home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url('images/home1.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            animation: change 15s infinite ease-in-out;


        }


        @keyframes change {
            0% {
                background-image: url('images/home1.jpeg');

            }

            20% {
                background-image: url('images/homen.jpg');

            }

            40% {
                background-image: url('images/home3.jpg');

            }

            60% {
                background-image: url('images/home4.jpg');
            }

            80% {
                background-image: url('images/home5.jpg');

            }

            100% {
                background-image: url('images/home6.jpg');
            }
        }

        @media (min-width:491px) {
            #mbar {
                display: none;
            }

            #mcross {
                display: none;
            }
        }
.navbargo{
    display: none;
}
        
        
    </style>

</head>

<body>

    <header>
        <!-- HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2 mlogo">
                        <?php
                        if (!empty($header[0]['site_logo'])) { ?>
                            <a href="<?php echo $hostname; ?>" class="logo-img"><img src="images/<?php echo $header[0]['site_logo']; ?>" alt=""></a>
                        <?php } else { ?>
                            <a href="<?php echo $hostname; ?>" class="logo"><?php echo $header[0]['site_name']; ?></a>
                        <?php } ?>
                    </div>

                    <!-- /LOGO -->
                    <div class="col-md-7">
                        <form action="search.php" method="GET" id="new">
                            <div class="input-group search">
                                <input type="text" class="form-control" name="search" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <input class="btn btn-default" type="submit" value="Search" />
                                </span>
                            </div>

                        </form>


                    </div>

                    <div class="col-md-3">
                        <ul class="header-info">

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        @session_start();
                                    }
                                    if (isset($_SESSION["user_role"])) { ?>
                                        Hello <?php echo $_SESSION["username"]; ?>
                                    <?php  } else { ?>
                                        <i class="fa fa-user"></i>
                                    <?php  } ?>

                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Trigger the modal with a button -->
                                    <?php
                                    if (isset($_SESSION["user_role"])) { ?>
                                        <li><a href="user_profile.php" class="">My Profile</a></li>
                                        <li><a href="user_orders.php" class="">My Orders</a></li>
                                        <li><a href="javascript:void()" class="user_logout">Logout</a></li>
                                    <?php  } else { ?>
                                        <li><a data-toggle="modal" data-target="#userLogin_form" href="#">login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                    <?php  } ?>

                                </ul>
                            </li>
                            <li>
                                <a href="wishlist.php"><i class="fa fa-heart"></i>
                                    <?php if (isset($_COOKIE['wishlist_count'])) {
                                        echo '<span>' . $_COOKIE["wishlist_count"] . '</span>';
                                    } ?>
                                </a>
                            </li>
                            <li>
                                <a href="cart.php"><i class="fa fa-shopping-cart" id="cart"></i>
                                    <?php if (isset($_COOKIE['cart_count'])) {
                                        echo '<span>' . $_COOKIE["cart_count"] . '</span>';
                                    } ?>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-bars" id="mbar"></i>
                            </li>
                            <li>
                                <!-- <i class="fa fa-times" id="mcross"></i> -->
                            </li>
                        </ul>

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="userLogin_form" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form id="loginUser" method="POST">
                                        <div class="customer_login">
                                            <h2>login here</h2>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="email" class="form-control username" placeholder="Username" autocomplete="off" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control password" placeholder="password" autocomplete="off" required>
                                            </div>
                                            <input type="submit" name="login" class="btn" value="login" />
                                            <span>Don't Have an Account <a href="register.php">Register</a></span>
                                        </div>
                                    </form>
                                    <!-- /Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->
                </div>
            </div>
        </div>
        <div class="header">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <nav class="navbar" style="margin-bottom: -7px;">
            <a href="http://localhost/drive/#home">Home</a>
            <a href="http://localhost/drive/#about">About</a>
            <a href="http://localhost/drive/#menu">Menu</a>
             <a href="http://localhost/drive/#review">Review</a>
            <a href="http://localhost/drive/#contact">Contact</a>

        </nav>
            </div>
        </div>
    </div>
        </div>

        <header>