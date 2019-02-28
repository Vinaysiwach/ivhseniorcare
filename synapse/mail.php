<?php
if(!empty($_POST['email'])){
 $fname=$POST['firstname'];
 $lname=$POST['lastname'];
 $email=$POST['email'];
 $phone=$POST['phone'];
 $msg=$POST['message'];
 
 $to= $email;
 $subject='Form Submission';
 $message="Fname:".$Fname."\n"."Lname:".$lname."\n"."phone:".$phone."\n"."Wrote the Following:"."\n".$msg;

	$filename = $_FILES["image"]["name"];
    $content = chunk_split(base64_encode(file_get_contents($_FILES["image"]["tmp_name"])));

    $uid = md5(time());
    $name = basename($file);
    
	$header .= 'From: <info@ivhseniorcare.com>' . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--" . $uid . "\r\n";

// You add html "Content-type: text/html; charset=utf-8\n" or for Text "Content-type:text/plain; charset=iso-8859-1\r\n" by I.khan
    $header .= "Content-type:text/html; charset=utf-8\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

// User Message you can add HTML if You Selected HTML content
    $header .= $message . "\r\n\r\n";

    $header .= "--" . $uid . "\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n"; // For Attachment
    $header .= $content . "\r\n\r\n";
    $header .= "--" . $uid . "--";

 
 if(mail($to,$subject,$message,$header)){
 echo "<h1> Sent Successfuly! Thank you"." ".$name.", We will Contact you Shortly!</h1>";
 
 }else{
   echo "Somthing went wrong!";
 }
}else{
echo "no email fill";
}
?>