<!DOCTYPE>
<html>
<body>
<?php
$login_name=$_POST['username'];
$login_pass=$_POST['password'];
$postnumber=$_POST['postid'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inout";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn,"SELECT username,password from users where username='".$login_name."' and password='".$login_pass."';");
if(mysqli_num_rows($result) <= 0){
	
	echo "Please check username and password".mysql_error();
	echo "Redirecting....";
	sleep(3);
	header("Location: signin.php");
}
else
{
$_SESSION['login_user']=$login_name;
header("Location: donation_signed_1.php");
}
?>
</body>
</html>