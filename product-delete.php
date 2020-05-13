<?php
$connection = new mysqli("localhost", "root", "", "primestore");
if ($connection->connect_error) {
    echo "<br>Issue details: " . $connection->connect_error;
    echo "<br>Error No. " . $connection->connect_errno;
}
$SQL = "DELETE FROM products WHERE id=" . $_REQUEST['id'];
$connection->query($SQL);
header("Location: dashboard-seller.php");