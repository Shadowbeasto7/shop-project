<?php 
    $db = new Database();
    $db->select('options','site_name,site_logo,currency_format');
    $header = $db->getResult();

    $cur_format = '$';
    if(!empty($header[0]['currency_format'])){
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
    <?php if(isset($title)){ ?>
        <title><?php echo $title; ?></title>
    <?php }else{ ?>
        <title>NewBasantaNursery</title>
        <link rel="icon" href="images/drawing1-1_1_.png" type="image/x-icon">
    <?php } ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style1.css">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    

    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
</head>
<body>
<!-- HEADER -->
        <div class="header-2">
        <img src="images/drawing1-1_1_.png" alt="Website Logo" class="logo">
            <a href="index" class="logo"></i><span>New</span>BasantaNursery</a>
            <form action="search" method="GET" class="serach-bar-container">
                <input type="text" class="form-class" id="search-bar" name ="search" placeholder="Search here...">
                <input class="btn btn-default"  type="submit" value="Search">
            </form>
        </div>
        <div class="header-3">
            <div id="menu-bar" class="fas fa-bars ">
            </div>
            <nav class="nav-bar">
                <a href="index">Home</a>
                <a href="all_products">Product</a>
                <a href="popular_products">Popular</a>
                <a href="cart">Cart</a>
                 <a href="#">About Us</a>
            </nav>

            <ul class="icons">
                    <span>
                        <a href="cart.php"><i class="fa fa-shopping-cart"></i>
                            <?php if(isset($_COOKIE['cart_count'])){
                                    echo '<span>'.$_COOKIE["cart_count"].'</span>';
                                } ?>
                        </a>
                    </span>
                    <span>
                    <a href="wishlist.php"><i class="fa fa-heart"></i>
                        <?php if(isset($_COOKIE['wishlist_count'])){
                               echo '<span>'.$_COOKIE["wishlist_count"].'</span>';
                         } ?>
                     </a>
                    </span>
                    <span class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            if(isset($_SESSION["user_role"])){ ?>
                                Hello <?php echo $_SESSION["username"]; ?><i class="caret"></i>
                            <?php  }else{ ?>
                                <i class="fa fa-user"></i>
                            <?php  } ?>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- Trigger the modal with a button -->
                            <?php
                                if(isset($_SESSION["user_role"])){ ?>
                                    <li><a href="user_profile.php" class="" >My Profile</a></li>
                                    <li><a href="user_orders.php" class="" >My Orders</a></li>
                                    <li><a href="javascript:void()" class="user_logout" >Logout</a></li>
                            <?php  }else{ ?>
                                    <li><a data-toggle="modal" data-target="#userLogin_form" href="#">login</a></li>
                                    <li><a href="register.php">Register</a></li>
                              <?php  } ?>

                        </ul>
                    </span>
                </ul>
                
            <!-- Modal -->
            <div class="modal fade" id="userLogin_form" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body">
                            <!-- Form -->
                            <form  id="loginUser" method ="POST">
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
                                    <input type="submit" name="login" class="btn" value="login"/>
                                    <span>Don't Have an Account <a href="register.php">Register</a></span>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
                    
          </div>
        