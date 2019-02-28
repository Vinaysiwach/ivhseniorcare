<?php
include "connection.php";
session_start();//function  to start session//
if (isset($_POST["submit"])) {
	//echo"<pre>"; print_r($_POST);die;
$email=$_POST['email'];
$userpass=$_POST['userpass'];

unset($_SESSION['error']);

if(empty($email) and empty($userpass)){
	$_SESSION['error']="Please Enter Username and Password";
	header('Location: index.php');exit;
	}


$query="select * from user where email='".$email."' and pass='".$userpass."'";
$sql=mysqli_query($conn,$query);


$result=mysqli_num_rows($sql);
$row=mysqli_fetch_assoc($sql);

if($result==1){

	$_SESSION['userInfo']=$row;
	header('Location: index.php');exit;
}
else
{
	<button onclick="myFunction()">Try it</button>


	 
	$_SESSION['error']="Incorrect Username or Password";
	header('Location: index.php');
	
}
}
<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>
?>