<?php 
   $connection = new mysqli("localhost", "root", "", "primestore");
   if ($connection->connect_error) {
       echo "<br> Issue details: " . $connection->connect_error;
       echo "<br> Error No. " . $connection->connect_errno;
   }
?>
<?php
if (isset($_POST['action']) && $_POST['action'] == 'update') {
       
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
      
        
        $SQL = "UPDATE products SET title='$title', price='$price', description = '$description', category_id= '$category_id' WHERE id= '$id' ";

        $connection->query($SQL);
        echo $connection->error;
		header("location:dashboard-seller.php");
        
    }
?>
<?php
$info = array();
    if (isset($_GET['action']) && $_GET['action'] == 'update') {
        $id = $_GET['id'];
        $result_set = $connection->query("SELECT * FROM products WHERE id = $id");
        $info = $result_set->fetch_array();
    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Prime Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-img/ecommerce.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Update Product
				</span>
				<form  action="product-update.php" method="post" class="login100-form validate-form p-b-33 p-t-5">
                <input type="hidden" name="id" value="<?php if (isset($info['id'])) echo $info['id']; ?>" />   
					<div class="wrap-input100 validate-input" data-validate = "title">
						<input class="input100" type="text" name="title" placeholder="Title" value="<?php if (isset($info['title'])) echo $info['title'] ?>">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                   
                    <div class="wrap-input100 validate-input" data-validate = "price">
						<input class="input100" type="text" name="price" placeholder="Price" value="<?php if (isset($info['price'])) echo $info['price'] ?>">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Description">
						<input class="input100" type="text" name="description" placeholder="Description" value="<?php if (isset($info['description'])) echo $info['description'] ?>">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                   
                    <div class="wrap-input100 validate-input" data-validate = "category-id">
						<input class="input100" type="text" name="category_id" placeholder="Category Id" value="<?php if (isset($info['category_id'])) echo $info['category_id']; ?>">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                    <input type="submit" name="action" value="update" />
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>





    
 
 
 
