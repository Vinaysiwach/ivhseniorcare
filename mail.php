<?php
if(!empty($_POST['form_email'])){
 $fname=$POST['first_name'];
 $lname=$POST['last_name'];
 $email=$POST['form_email'];
 $phone=$POST['from_phone'];
 $msg=$POST['from_message'];
 
 $to= $email;
 $subject='Form Submission';
 $message="Fname:".$Fname."\n"."Lname:".$lname."\n"."phone:".$phone."\n"."Wrote the Following:"."\n".$msg;
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: <noreply@ivhseniorcare.com>' . "\r\n";
 
 if(mail($to,$subject,$message,$header)){
 echo "<h1> Sent Successfuly! Thank you"." ".$name.", We will Contact you Shortly!</h1>";
 
 }else{
   echo "Somthing went wrong!";
 }
}else{
echo "no email fill";
}
?>