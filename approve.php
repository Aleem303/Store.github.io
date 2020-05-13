<?php 
   $connection = new mysqli("localhost", "root", "", "primestore");
   if ($connection->connect_error) {
       echo "<br> Issue details: " . $connection->connect_error;
       echo "<br> Error No. " . $connection->connect_errno;
   }
  
   $id = $_REQUEST['id'];
  
   $SQL = "UPDATE products SET status = '1' WHERE id= '$id' ";
   $connection->query($SQL);
   echo $connection->error;
   header("location:dashboard-admin.php");
?>