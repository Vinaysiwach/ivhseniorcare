<?php

include "connection.php";
session_start();//function  to start session//

unset($_SESSION['error']);
if (isset($_POST["submit"])) {
	//echo"<pre>"; print_r($_POST);die;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pass= $_POST['password'];
$phone= $_POST['phone'];
$address1= $_POST['address1'];
$country= $_POST['country'];
$state= $_POST['state'];
$zipcode= $_POST['zipcode'];
//$name= $_POST['name'];
  $query="insert into user(fname,lname,email,pass,phone,address1,country,state,zip)
 values ('$fname','$lname','$email','$pass','$phone','$address1','$country','$state','$zipcode')";
 
$sql= mysqli_query($conn,$query);


if($sql){
	$_SESSION['error']="User Registered Successfully.";
	header('Location: index.php');
}
}



?>