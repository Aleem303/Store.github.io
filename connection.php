<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "primestore";

$connection = mysqli_connect($servername, $username, $password , $dbname);

if($connection){
   // echo "connected";
}else{
    die("Connection failed because ". mysqli_connect_error());
}

?>