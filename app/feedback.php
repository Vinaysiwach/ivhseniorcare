<?php
include_once('connection.php');    
if (isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['contact'])) 
{  
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact'])) {  
        // response array for json  
        $response    = array();           
        $contact     = $_POST["contact"];  
        $message     = $_POST["message"];   
        $status      = $_POST["status"];  
       
         
        //mysql_query("SET CHARACTER SET 'utf8'");  
        // mysql query  
        $query       = "INSERT INTO feedback(contact,message,status)  
VALUES('$contact', '$message')";  
        $result = mysqli_query($query) or die(mysqli_error());  
        if ($result) {  
            $response["error"]   = false;  
            $response["message"] = "Thank You for Feedback!";  
        } else {  
            $response["error"]   = true;  
            $response["message"] = "Failed To Send Data!";  
        }  
    } else {  
        $response["error"]   = true;  
        $response["message"] = "Values name is missing!";  
    }  
    // echo json response  
    echo json_encode($response);  
}  
  
?>  
