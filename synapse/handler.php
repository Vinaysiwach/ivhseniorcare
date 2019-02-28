<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )


require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['firstname','lastname', 'email','phone'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);

$pp->attachFiles(['image']);


$pp->sendEmailTo('info@ivhseniorcare.com'); // ← Your email here

echo $pp->process($_POST); */
/*print_r($_REQUEST);
print_r($_FILES);*/
if(!empty($_REQUEST['firstname'])){
 $fname=$_REQUEST['firstname'];
 $lname=$_REQUEST['lastname'];
 $email=$_REQUEST['email'];
 $phone=$_REQUEST['phone'];
 $msg=$_REQUEST['message'];
 
 //$to= 'info@ivhseniorcare.com';
 $to= 'info@ivhseniorcare.com';
 $fromemail= 'info@ivhseniorcare.com';
 $subject='Form Submission';
 $message="Fname:".$fname."\n";
 $message.="Lname:".$lname."\n";
 $message.="phone:".$phone."\n";
 $message.="email:".$email."\n";
 $message.="Wrote the Following:"."\n".$msg;

     //Get uploaded file data
    $file_tmp_name    = $_FILES['image']['tmp_name'];
    $file_name        = $_FILES['image']['name'];
    $file_size        = $_FILES['image']['size'];
    $file_type        = $_FILES['image']['type'];
    $file_error       = $_FILES['image']['error'];

    
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

        $boundary = md5("sanwebe");
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$fromemail."\r\n"; 
        $headers .= "Reply-To: ".$fromemail."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n"; 
        
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n"; 
        $body .= chunk_split(base64_encode($message)); 
        
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content;

 //echo $message;
 if(mail($to,$subject,$body,$headers)){
 echo "<h1> Sent Successfuly! Thank you"." ".$fname.", We will Contact you Shortly!</h1>";
 
 }else{
   echo "Somthing went wrong!";
 }
}else{
echo "no email fill";
}
?>