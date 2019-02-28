<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	
	$workingKey='A4C9ADA58B1F834293D6C0F4065AEBD0';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		echo "<br> Your transaction is successful.";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>The transaction has been Canceled.Thank you";
		$link_address = 'http://ivhseniorcare.com'; echo '<a href="http://ivhseniorcare.com"><br><h1>ok</h1></a>';
	}
	else if($order_status==="Failure")
	{
		echo "<br>The transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	//for($i = 0; $i < $dataSize; $i++) 
	//{
	//	$information=explode('=',$decryptValues[$i]);
	//    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	//}

	//echo "</table><br>";
	//echo "</center>";

?>
