<?php
	
	//process client request (VIA URL)
    header("Content-Type:application/json");
    include ("function.php");

	if(!empty($_GET['name']))
	  {
	  	$name=$_GET['name'];   
	  	$price=get_price($name);

	  	if(empty($price))
	  		//book not found
	  		deliver_response(200,"book not found",NULL);
	  	else
	  		//respond book price
	  		deliver_response(200,"book found",$price);
	  }
	else
		
	  {
  	//throw invalid request
	  	deliver_response(400,"Invalid request",NULL);

	  }


	  function deliver_response($status,$status_message,$data){

	  		header("HTTP/1.1 $status $status_message");

	  		$response['status']=$status;
	  		$response['status_message']=$status_message;
	  		$response['name']=$data[0];
	  		$response['author']=$data[1];
	  		$response['image']=$data[2];
	  		$response['price']=$data[3];

	  		$json_response=json_encode($response);
	  		echo $json_response;
	  }







?>