<?php
if(isset($_REQUEST['task']) and $_REQUEST['task']=='forgot') {
//print_r($_REQUEST);die;
    // EDIT THE 2 LINES BELOW AS REQUIRED
    
  
    $email = $_POST['email']; // required
   
	
    
	$email_message .= "Update Your Password"."\n";
	$email_message .= "Follow this link: http://www.ivhseniorcare.com/changepassword.php"."\n";
    
    $data=mailprocess($email_message);
	if($data==1){
		echo 1; die;
	}
	else
	{
		echo 0; die;
	}
// create email headers

}


function mailprocess($email_message){
    $email_subject = "Received a mail by ivhseniorcare";
	$email = $_POST['email']; 
	$email_to = $email;
    $email_subject = "Received a mail by ivhseniorcare";
	$headers =  'MIME-Version: 1.0' . "\r\n";  
    $headers .= "From:info@ivhseniorcare.com \r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
if(mail($email_to, $email_subject, $email_message, $headers)){
	return 1;
	
} else{
	return 0;
}

}

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
	
	?>