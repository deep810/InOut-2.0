<?php

session_start();
if(!$_SESSION["login_user"])
{
echo "please login" ;
}
$username=$_SESSION["login_user"];
$_SESSION["amount"]=$_POST["amount"];




	header('Location: donation_signed_2.php');

?>