<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inout";
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
session_destroy();
echo "<script>alert('You have successfully logged out !!');</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php"> ' ;
?>