<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('connection.php');
$response=array("status"=>"failed","msg"=>"Invalid requiest data");
//echo "<pre>";print_r($_REQUEST);die;
if(isset($_REQUEST["email"]) and isset($_REQUEST["password"])){


	$email = mysqli_real_escape_string($conn,$_REQUEST['email']); 
	$password = mysqli_real_escape_string($conn,$_REQUEST['password']);
	$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$result =   mysqli_query($conn,$query)  or die("Unable to verify user because " . mysql_error()); 
	$row = mysqli_fetch_assoc($result); 
	if (!empty($row['id'])) { // 
		 $response["status"] = "success"; // echoing JSON response  
		$response["msg"]="successfully login";
		$response["data"]=$row;
	} else { // email and password not found // 
 		$response["status"] = "failed"; // echoing JSON response 
		$response["msg"]="user and password invalid";
	}
}
echo json_encode($response); 

?>
