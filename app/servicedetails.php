<?php
include_once('connection.php');
if($_SERVER['REQUEST_METHOD'] == "GET"){
	
	if(!empty($_REQUEST['id'])){
		
	$sql = "select * from `services` where status =1 and id=".mysqli_real_escape_string($conn,$_REQUEST['id']);
	$result = mysqli_query($conn,$sql);
			if (!$result) {		
			$json=array("code" => 400, "message"=> "Could not successfully run query ($sql) from DB: " . mysqli_error($conn));
		   
			header('content-type:application/json');
			echo json_encode($json);
				exit;
			}
			
			if (mysqli_num_rows($result) == 0) {
				$json=array("code" => 400, "message"=> "No id found".$_REQUEST['id']);
			}else{
				 while ($row = mysqli_fetch_assoc($result)) {
					$results[]=$row;		
				}
				$json=array("code" => 200, "message"=> "Success",'data'=>$results);
				
			}
			
			@mysqli_close($conn);
			header('content-type:application/json');
			echo json_encode($json);
				exit;
		
	}else{
		$json=array("code" => 400, "message"=> "Please provide service id.");
		echo json_encode($json);
        exit;
		
	}
	
  
}else{
	$json=array("code" => 400, "message"=> "Request Method is not GET");
	echo json_encode($json);
        exit;
}

?>
