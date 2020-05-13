<?php 
   $connection = new mysqli("localhost", "root", "", "primestore");
   if ($connection->connect_error) {
       echo "<br> Issue details: " . $connection->connect_error;
       echo "<br> Error No. " . $connection->connect_errno;
   }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Prime Store</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/core-img/prime.png" width="150px" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><h2><a href="index.php">PRIME STORE</a> </h2></li>
                            <!-- <li><a href="#">Pages</a>
                                
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li> -->
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
               
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="login.php">LOGIN <img src="img/core-img/login.png" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="create-new-customer.php">SIGN UP <img src="img/core-img/user.svg" alt="" > </a>
                </div>
                <!-- Cart Area -->
                <!-- <div class="cart-area">
                    <a href="#" id="essenceCartBtn"> CART <img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div> -->
            </div>

        </div>
    </header>
    
    
    
    
    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/ecommerce.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        
                        <i><h2 >PRIME STORE</h2></i>
                        <a href="create-shop.php" class="btn essence-btn">CREATE SHOP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

        <div class="container mt-100">
            <div class="row ">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>CATAGORIES</h2>
                    </div>
                </div>
            </div>
        </div>

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/car.jpg);">
                        <div class="catagory-content">
                            <a href="catagory.php?id=1">Cars</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bike.jpg);">
                        <div class="catagory-content">
                            <a href="catagory.php?id=2">Bikes</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/mobile.jpg);">
                        <div class="catagory-content">
                            <a href="catagory.php?id=3">Mobile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mt-50">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/laptop.jpg);">
                        <div class="catagory-content">
                            <a href="catagory.php?id=4">Laptop</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/furniture.jpg);">
                        <div class="catagory-content">
                            <a href="catagory.php?id=5">Furniture</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/property.jpg);">
                        <div class="catagory-content">
                            <a href="catagory.php?id=6">Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ##### Top Catagory Area End ##### -->


    <!-- ##### New Arrivals Area Start ##### -->



    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Fresh Recommedations</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                    


 <?php
 // main pictures
    $query = "SELECT * FROM pictures where is_main_picture = '1' ";  
    $data = $connection->query($query); 
// hover pictures 
    $query1 = "SELECT * FROM pictures where hover = '2' ";  
    $hover = $connection->query($query1); 
// product info        
    $products_sql = "SELECT * FROM products";
    $products_resultset = $connection->query($products_sql);
    
  
        while($row =  $data->fetch_array()){                    // 1
            $product_info = $products_resultset->fetch_array(); // 2
                $hoverr = $hover->fetch_array();                // 3    
       
    
?>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src='<?= $row['picture_file_name'];?>' alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="<?= $hoverr['picture_file_name'];?>" alt="" height="300px">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="product.php?pid=<?=$product_info['id']?>">
                                    <h6><?= $product_info['title']?></h6>
                                </a>
                                <p class="product-price"><?= $product_info['price']?></p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

    <?php } ?>


                            </div>
                        </div>
                    </div>               
            </div>
        
    </section>
  

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright @ 2020 All rights reserved 
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>




</html>