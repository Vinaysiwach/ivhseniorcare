<?php include_once('connection.php');
//echo"<pre>"; print_r($_REQUEST);die;
//$name = isset($_GET['name']) ? mysqli_real_escape_string($conn,$_GET['name']) : "";
$email= isset($_GET['email'])? mysqli_real_escape_string($conn,$_GET['email']):"";
if(!empty($email))
{ 
$sql=mysqli_query($conn," SELECT * FROM user WHERE email='$email' ") or  die($json=array("code" => 400, "message"=> 'Mysqli Connection error'));

if(mysqli_num_rows($sql)>0) 
{ 
 $res=mysqli_fetch_array($sql); 
 $to=$res['email'];
 $password=$res['password'];
 $subject='Remind password';
 $message='Your password : '.$res['password']; 
 $headers='From:info@ivhseniorcare.com';
 $m=mail($to,$subject,$message,$headers);
 
 if(!empty($to)&& $m!=0)
 {
   
$json=array("code" => 200, "message"=> 'Check your inbox in registered mail.');
 }
 else
 {
  
  $json=array("code" => 400, "message"=> 'mail is not send.');
 }
}
else
{
 
 $json=array("code" => 400, "message"=> 'Email id does not exist.');
}
}
else
   {
   
$json=array("code" => 400, "message"=> 'Please enter your email id.');
}
@mysqli_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);
?>