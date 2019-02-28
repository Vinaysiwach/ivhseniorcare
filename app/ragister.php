<?php
include_once('connection.php');
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
     //echo"<pre>"; print_r($_REQUEST);die;
	$name = isset($_GET['name']) ? mysqli_real_escape_string($conn,$_GET['name']) : "";
	$mobile = isset($_GET['mobile']) ? mysqli_real_escape_string($conn,$_GET['mobile']) : "";
	$email = isset($_GET['email']) ? mysqli_real_escape_string($conn,$_GET['email']) : "";
	$password = isset($_GET['password']) ? mysqli_real_escape_string($conn,$_GET['password']) : "";
	$Confirm_password = isset($_GET['Confirm_password']) ? mysqli_real_escape_string($conn,$_GET['Confirm_password']) : "";
	$address_line1 = isset($_GET['address_line1']) ? mysqli_real_escape_string($conn,$_GET['address_line1']) : "";
	$address_line2 = isset($_GET['address_line2']) ? mysqli_real_escape_string($conn,$_GET['address_line2']) : "";
	$state = isset($_GET['state']) ? mysqli_real_escape_string($conn,$_GET['state']) : "";
	$city = isset($_GET['city']) ? mysqli_real_escape_string($conn,$_GET['city']) : "";
	$pincode = isset($_GET['pincode']) ? mysqli_real_escape_string($conn,$_GET['pincode']) : "";

	$createdtime = date('Y-m-d');

	
	$fields = array('name','mobile', 'email','password','Confirm_password','address_line1', 'address_line2', 'state', 'city', 'pincode');
	
	$error = false; //No errors yet
	foreach($fields AS $fieldname) { //Loop trough each field
		if(!isset($_GET[$fieldname]) || empty($_GET[$fieldname]))
	
  		{
		    $json=array("code" => 400, "message"=> 'Field '.$fieldname.' should not be blank.  ');
		    //@mysqli_close($conn);
			header('content-type:application/json');
			echo json_encode($json);
    			exit();	
		}
	}
	
	$checkdata="SELECT mobile FROM user WHERE mobile='$mobile'";
	if(isset($_GET['name']))
	{	
		if(empty($name))
		{    
			$json=array("code" => 400, "message"=> 'Please enter a valid Name. ');
			//@mysqli_close($conn);
			header('content-type:application/json');
			echo json_encode($json);
			exit();
		}
	   	$query=mysqli_query($conn,$checkdata);
	
		if(mysqli_num_rows($query)>0)
	    	{
		  
	      	$json=array("code" => 400, "message"=> 'This Mobile No. already exist.');
		  //@mysqli_close();
		  header('content-type:application/json');
		  echo json_encode($json);
		  exit();
	    	}
		
        	if(!preg_match("/^[A-Za-z]\S*$/",$name))
        	{
		 
		  $json=array("code" => 400, "message"=> 'Only characters are allow in Name. ');
		 // @mysqli_close($conn);
		  header('content-type:application/json');
		  echo json_encode($json);
		  exit();
		}
	}	
	
	$checkmail=" SELECT email FROM user WHERE email='$email'";
	
	if(isset($_GET['email']))
	{	
		if(empty($email))
		{
			$json=array("code" => 400, "message"=> 'Please enter valid email id.');
			//@mysqli_close($conn);
			header('content-type:application/json');
			echo json_encode($json);
			exit();
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	  {
        
		$json=array("code" => 400, "message"=> 'Invalid email format.');
		@mysqli_close($conn);
		header('content-type:application/json');
		echo json_encode($json); 
		exit();
		
      }
	$query=mysqli_query($conn,$checkmail);
	
		if(mysqli_num_rows($query)>0)
	    {
	    
		$json=array("code" => 400, "message"=> 'User email already exist.');
		@mysqli_close($conn);
		header('content-type:application/json');
		echo json_encode($json);
		exit();
	    }
	}
	
	
	// Insert data into data base 
   $sql = "INSERT INTO`user`(`name`,`mobile`,`email`,`password`,`Confirm_password`,`address_line1`,address_line2,`state`,`city`,`pincode`,`createdtime`, `modifiedtime`,`is_active`) VALUES ('$name','$mobile','$email','$password','$Confirm_password','$address_line1','$address_line2','$state','$city','$pincode',now(),now(),1)";
	
	    $qur = mysqli_query($conn,$sql); 
      $result= mysqli_query($conn,"SELECT user.id FROM user ORDER BY user.id DESC LIMIT 1");
        $row3= mysqli_fetch_array ($result);
	$id = $row3['id'];
	if($qur)
	{ 
	    
		$json=array("code" => 200, "message"=> 'User signed up successfully.',"data" => array("id" => $id));
	}
	else
	{
	    
		$json=array("code" => 400, "message"=> 'Please wait, there are some errors.');
	}
}
else
{
   
   $json=array("code" => 400, "message"=> 'Request method not accepted.');
}
@mysqli_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);
