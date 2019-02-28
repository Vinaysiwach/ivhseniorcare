
<?php
if(isset($_REQUEST['task']) and $_REQUEST['task']=='sidecontact') {

 //print_r($_REQUEST);die;
    // EDIT THE 2 LINES BELOW AS REQUIRED
    

    
    $first_name = $_POST['name']; // required
    $last_name = $_POST['address']; // required
    $email_from = $_POST['phone']; // required
    $telephone = $_POST['services']; // not required
 

 
     
 
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Address: ".clean_string($last_name)."\n";
    $email_message .= "Phone:".clean_string($email_from)."\n";
    $email_message .= "Services: ".clean_string($telephone)."\n";
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
if(isset($_REQUEST['task']) and $_REQUEST['task']=='sideformlarge') {

 //print_r($_REQUEST);die;
    // EDIT THE 2 LINES BELOW AS REQUIRED
    
    $first_name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // required
	$gender = $_POST['gender']; // required
    $age = $_POST['age']; // required
    $state = $_POST['state']; // not required
	$medical_problem= $_POST['medical_problem'];
	$message= $_POST['message'];
	
    $email_message .= "Name: ".clean_string($first_name)."\n";
	$email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Gender:".clean_string($gender)."\n";
    $email_message .= "Age: ".clean_string($age)."\n";
	$email_message .= "State: ".clean_string($state)."\n";
    $email_message .= "Medical Problem:".clean_string($medical_problem)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
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
	$email_to = "info@ivhseniorcare.com";
	$email_to = "akash@indiavirtualhospital.com";
    $email_subject = "Received a mail by ivhseniorcare";
	$headers =  'MIME-Version: 1.0' . "\r\n";  
    $headers .= 'From: <noreply@ivhseniorcare.com>' . "\r\n";
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