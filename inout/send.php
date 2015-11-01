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

$sql="SELECT * FROM users WHERE username='{$_SESSION["login_user"]}'";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){


$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => 'LM-123456',
    'To'    => $row["phone"],

    'Body'  => 'Dear user, Your donation has been made successfully. Thank You for your contribution !!',
);
}
$exotel_sid = "inout5"; // Your Exotel SID
$exotel_token = "f4991bf6059ae87c7e7808e11fcd51a722d4798b"; // Your exotel token
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
	
	
header('Location: index_signed.php');
?>