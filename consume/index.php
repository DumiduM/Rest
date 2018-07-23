<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: url('http://verdewall.com/wp-content/uploads/2017/05/White-Background-647.jpg'); background-repeat: no-repeat; background-size: 100%;">
	<div class="container">
		<h2 style="text-align: center; margin-bottom: 2%">IT Book Store</h2>
<form method="POST">
	<input placeholder="Programing Language" style="margin-top: 1%;" type="text" class="form-control" name="name">
	<input type="submit" class = "btn btn-info" name = "submit" value="Price" style="margin-top: 1%;">
</form>


<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];

	$url = "172.16.16.70/newRest/web/?name=$name";
// http://172.16.16.70/newRest/web/?name=Java
	$client = curl_init($url);

	curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
	$response=curl_exec($client);
	// echo($response);

	if(!empty(json_decode($response))){
		$result=json_decode($response);
	?>
	<h2><?php echo $result->name; ?></h2>
	<img style="width: 10%;" src="<?php echo $result->image; ?>">
	<h3><?php echo $result->author; ?></h3>
	<h2 style="color: red;"><?php echo $result->price; ?></h2>

	<?php
	}
	else
		$result="No records found";
	// echo $result;
	}
?>
</div>
</body>
</html>
