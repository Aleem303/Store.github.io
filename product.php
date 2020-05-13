<?php 
   $connection = new mysqli("localhost", "root", "", "primestore");
   if ($connection->connect_error) {
       echo "<br> Issue details: " . $connection->connect_error;
       echo "<br> Error No. " . $connection->connect_errno;
   }

   $product_id = 0;
    if(isset($_GET['pid'])) 
       $product_id = $_GET['pid'];
      
       $query1 = "SELECT * FROM `products` WHERE id = $product_id";
       $data1 = mysqli_query($connection, $query1);
       $product = mysqli_fetch_assoc($data1);
       
       $user_id = $product['user_id'];
       $title = $product['title'];
       $price = $product['price'];
       $description =  $product['description'];
       // echo $product['date_added'];


       $query2 = "SELECT * FROM `users` WHERE id = '$user_id'";
       $data2 = mysqli_query($connection, $query2);
       $result2 = mysqli_fetch_assoc($data2);
       
       $shop_title = $result2['shop_title'];

      // echo $picture_file_name . "<br>";
    //    echo $user_id . "<br>";
    //    echo $title . "<br>";
    //    echo $price . "<br>";
    //    echo $description . "<br>";
    //    echo $shop_title . "<br>";
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
                <a class="nav-brand" href="index.html"><img src="img/core-img/prime.png" width="150px" alt=""></a>
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
                    <a href="create-new-customer.php">SIGN UP <img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <!-- <div class="cart-area">
                    <a href="#" id="essenceCartBtn"> CART <img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div> -->
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <!-- <div class="cart-list">
                
                
                <!- Single Cart Item -->
               

                <!-- Single Cart Item -->
               
            </div>

            <!-- Cart Summary -->
            
        </div>
    </div> 
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
         <?php 
         // pictures table   
            $query = "SELECT * FROM `pictures` WHERE product_id = $product_id";
            $data = mysqli_query($connection, $query);
            $result = mysqli_fetch_assoc($data);
     
             while($pics =  $data->fetch_array()){
           
                $picture_file_name = $pics['picture_file_name'];
                echo '<img src="' . $picture_file_name . '" alt="">';
       } 

?>                                
            </div>
        </div>

        <!-- Single Product Description -->
       
        <div class="single_product_desc clearfix">
            <span><?= $shop_title?></span>
            <a href="cart.html">
                <h2><?= $title ?></h2>
            </a>
            <p class="product-price"> Rs. <?= $price ?> </p>
            <p class="product-desc"><?=  $description ?></p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <!-- <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">Size: XL</option>
                        <option value="value">Size: X</option>
                        <option value="value">Size: M</option>
                        <option value="value">Size: S</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">Color: Black</option>
                        <option value="value">Color: White</option>
                        <option value="value">Color: Red</option>
                        <option value="value">Color: Purple</option>
                    </select>
                </div> -->
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
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