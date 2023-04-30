<?php
require('connection.php');
require('function.php');
require('main.js');
require('add_to_cart.php');
$cat_result=mysqli_query($con,"SELECT * FROM `categories` WHERE status=1 ORDER by categories ASC");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_result)){
$cat_arr[]=$row;
}
$obj = new add_to_cart();
$totalProduct=$obj ->totalProduct();

// whistlist data count
if(isset($_SESSION['USER_LOGIN'])){
    $uid=$_SESSION['USER_ID'];
    if(isset($_GET['whistlist_id'])){
        $wis_id=get_safe_value($con,$_GET['whistlist_id']);
        $del="DELETE FROM wishtlist WHERE id='$wis_id' AND user_id='$uid' ";
        $res=mysqli_query($con,$del);
    }

    $whistlist_count=mysqli_num_rows(mysqli_query($con,"SELECT product.name,product.image,product.price,product.mrp,wishtlist.id FROM product,wishtlist WHERE wishtlist.product_id=product.id AND wishtlist.user_id='$uid'"));
}

// Website page title show 

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$meta_title="Ecom Website";
$meta_desc="Ecom Website";
$meta_keyword="Ecom Website";
if($mypage=='product.php'){
$product_id=get_safe_value($con,$_GET['id']);
$product_meta=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM product WHERE id ='$product_id' "));
$meta_title=$product_meta['meta_title'];
$meta_desc=$product_meta['meta_desc'];
$meta_keyword=$product_meta['meta_keyword'];
}if($mypage=='product.php'){
    $meta_title="Contact Us";
}

// End Meta title show in website
?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $meta_title  ?></title>
        <meta name="description" content="<?php echo $meta_desc ?>">
        <meta name="meta_keyword" content="<?php echo $meta_keyword ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="some.css">
        
        <!-- All css files are included here. -->
        <!-- Bootstrap fremwork main css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Owl Carousel min css -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <!-- This core.css file contents all plugings css file. -->
        <link rel="stylesheet" href="css/core.css">
        <!-- Theme shortcodes/elements style -->
        <link rel="stylesheet" href="css/shortcode/shortcodes.css">
        <!-- Theme main style -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- User style -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Modernizr JS -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <style type="text/css">
            .htc__shopping__cart a span.htc__whistlist{
                    background: #c43b68;
                    border-radius: 100%;
                    color: #fff;
                    font-size: 9px;
                    height: 17px;
                    line-height: 19px;
                    position: absolute;
                    right: 18px;
                    text-align: center;
                    top: -4px;
                    width: 17px;

            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Body main wrapper start -->
        <div class="wrapper">
            <!-- Start Header Style -->
            <header id="htc__header" class="htc__header__area header--one">
                <!-- Start Mainmenu Area -->
                <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                    <div class="container">
                        <div class="row">
                            <div class="menumenu__container clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                    <div class="logo">
                                        <a href="index.php"><img src="images/logo/4.png" alt="logo images"></a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-6 col-sm-5 col-xs-3">
                                    <nav class="main__menu__nav hidden-xs hidden-sm">
                                        <ul class="main__menu">
                                            <li class="drop"><a href="index.php">Home</a></li>
                                            <li class="drop"><a href="products.php">Product</a>
                                            <!-- <ul class="dropdown">
                                                <li><a href="product-grid.html">Product Grid</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul> -->
                                        </li>
                                        <?php
                                        foreach($cat_arr as $list ){
                                        ?>
                                        <li><a href="categories.php?id=<?php echo $list['id'] ?>"><?php echo $list['categories'] ?></a></li>
                                        <?php
                                        }
                                        ?>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </nav>
                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <?php
                                            foreach($cat_arr as $list ){
                                            ?>
                                            <li><a href="categories.php?id=<?php echo $list['id'] ?>"><?php echo $list['categories'] ?></a></li>
                                            <?php
                                            }
                                            ?>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-4 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">

                                        <?php
                                        if(isset($_SESSION['USER_LOGIN'])){
                                        echo '<a href="logout.php">Logout</a>';
                                        echo '<a href="my_order.php">Order</a>';
                                        }else{
                                        echo '<a href="login.php">Login/Register</a>';
                                        }
                                        ?>
                                    </div>
                                    
                                    <div class="htc__shopping__cart">
                                         <?php
                                        if(isset($_SESSION['USER_ID'])){
                                            ?>
                                        <a class="whistlist" href="whistlist.php"><i class="icon-heart icons"></i></a>
                                        <a href="whistlist.php"><span class="htc__whistlist"><?php echo $whistlist_count ?></span></a>
                                        <?php } ?>
                                        <a class="cart__menu" href="cart.php"><i class="icon-handbag icons"></i></a>
                                        <a href="cart.php"><span class="htc__qua"><?php echo $totalProduct ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="search.php" method="get">
                                    <input placeholder="Search here... " type="text" name="str">
                                    <button type="submit" name="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->