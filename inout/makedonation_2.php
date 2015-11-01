<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inout";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
if(!$_SESSION["login_user"])
{
echo "please login" ;
}
$username=$_SESSION["login_user"];
$amount = $_SESSION["amount"];
$name=$_POST['name'];
$card_no=$_POST['card_no'];

$query = "INSERT INTO payment (username,name,card_no,date,amount) VALUES('{$username}','{$name}','{$card_no}',now(),'{$amount}')";

if(mysqli_query($conn,$query)){
	header('Location: send.php');
	
}
else
{
	echo 'Please check details'.mysql_error();
	echo 'Redirecting....';
	sleep(3);
	//header('Location: donation_signed_2.php');
}
?>