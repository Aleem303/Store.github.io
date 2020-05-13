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
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"> CART <img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    
    
    


    
<?php

    if(isset($_REQUEST['id']) && $_REQUEST['id'] == 1){
        $id = $_REQUEST['id'];
        echo "<h1>Cars</h1>";
        $SQL = "SELECT * FROM products WHERE category_id = $id";
        $result_set = $connection->query($SQL);

        if ($result_set->num_rows > 0) { ?>

        <table class="table" border=1>
            <tr>                
                <th><h4>Title</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>Description</h4></th>
                
            </tr>
            
            <?php
                while ($record = $result_set->fetch_array()) { ?>
            <tr> 
                <td><?= $record['title'] ?></td>
                <td><?= $record['price'] ?></td>
                <td><?= $record['description'] ?></td>
                
            </tr>
            <?php } ?>
        </table>
<?php } 
}

    else if(isset($_REQUEST['id']) && $_REQUEST['id'] == 2){
        echo "<h1>Bikes</h1>";
        $id = $_REQUEST['id'];
        $SQL = "SELECT * FROM products WHERE category_id = $id";
        $result_set = $connection->query($SQL);
    
        if ($result_set->num_rows > 0) { ?>
    
         <table class="table" border=1>
             <tr>
                <th><h4>Title</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>Description</h4></th>
            </tr>
         <?php
                while ($record = $result_set->fetch_array()) { ?>
             <tr>
                 <td><?= $record['title'] ?></td>
                 <td><?= $record['price'] ?></td>
                 <td><?= $record['description'] ?></td>
             </tr>
             <?php } ?>
         </table>
                    <?php } 
        
    }
    else if(isset($_REQUEST['id']) && $_REQUEST['id'] == 3){
        echo "<h1>Mobiles</h1>";
        $id = $_REQUEST['id'];
        $SQL = "SELECT * FROM products WHERE category_id = $id";
        $result_set = $connection->query($SQL);
    
        if ($result_set->num_rows > 0) { ?>
    
         <table class="table" border=1>
             <tr>
                <th><h4>Title</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>Description</h4></th>
            </tr>
         <?php
                while ($record = $result_set->fetch_array()) { ?>
             <tr>
                 <td><?= $record['title'] ?></td>
                 <td><?= $record['price'] ?></td>
                 <td><?= $record['description'] ?></td>
             </tr>
             <?php } ?>
         </table>
                    <?php } 
    }
    else if(isset($_REQUEST['id']) && $_REQUEST['id'] == 4){
        echo "<h1>Laptop</h1>";
        $id = $_REQUEST['id'];
        $SQL = "SELECT * FROM products WHERE category_id = $id";
        $result_set = $connection->query($SQL);
    
        if ($result_set->num_rows > 0) { ?>
    
         <table class="table" border=1>
             <tr>
                <th><h4>Title</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>Description</h4></th>
            </tr>
         <?php
                while ($record = $result_set->fetch_array()) { ?>
             <tr>
                 <td><?= $record['title'] ?></td>
                 <td><?= $record['price'] ?></td>
                 <td><?= $record['description'] ?></td>
             </tr>
             <?php } ?>
         </table>
                    <?php } 
    }
    else if(isset($_REQUEST['id']) && $_REQUEST['id'] == 5){
        echo "<h1>Furnuture</h1>";
        $id = $_REQUEST['id'];
        $SQL = "SELECT * FROM products WHERE category_id = $id";
        $result_set = $connection->query($SQL);
    
        if ($result_set->num_rows > 0) { ?>
    
         <table class="table" border=1>
             <tr>
                <th><h4>Title</h4></th>
                <th><h4>Price</h4></th>
                <<th><h4>Description</h4></th>
            </tr>
         <?php
                while ($record = $result_set->fetch_array()) { ?>
             <tr>
                 <td><?= $record['title'] ?></td>
                 <td><?= $record['price'] ?></td>
                 <td><?= $record['description'] ?></td>
             </tr>
             <?php } ?>
         </table>
                    <?php } 
    }
    else if(isset($_REQUEST['id']) && $_REQUEST['id'] == 6){
        echo "<h1>Land</h1>";
        $id = $_REQUEST['id'];;
        $SQL = "SELECT * FROM products WHERE category_id = $id";
        $result_set = $connection->query($SQL);
    
        if ($result_set->num_rows > 0) { ?>
    
         <table class="table" border=1>
             <tr>
                <th><h4>Title</h4></th>
                <th><h4>Price</h4></th>
                <th><h4>Description</h4></th>
            </tr>
         <?php
                while ($record = $result_set->fetch_array()) { ?>
             <tr>
                 <td><?= $record['title'] ?></td>
                 <td><?= $record['price'] ?></td>
                 <td><?= $record['description'] ?></td>
             </tr>
             <?php } ?>
         </table>
                    <?php } 
    }

?>
</body>

</html>