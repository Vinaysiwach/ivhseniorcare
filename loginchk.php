<?php
include "connection.php";
session_start();//function  to start session//
$name=$_POST['email'];
$password=$_POST['pass'];




$query="select uid from user where email='".$name."' and password='".$password."'";

$sql=mysqli_query($conn,$query);


$result=mysqli_num_rows($sql);

if($result==1){

	echo 'username or password inccorect';
}
else
{
	header('Location: index.php');
	$_SESSION['userid']=$mail;
}


?>