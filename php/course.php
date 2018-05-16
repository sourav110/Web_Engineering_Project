<?php
	
	$con = mysql_connect("localhost", "root", "");

	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	}
	
	// echo "Connected";

	mysql_select_db("web_project", $con);


	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$course = $_POST['course'];
	$payment = $_POST['payment'];
	$profession = $_POST['profession'];

	$sql = "INSERT INTO course (name, email, phone, course, payment, profession) 
		VALUES ('$name', '$email', '$phone', '$course', '$payment', '$profession')";

	
	if (!mysql_query($sql, $con)) 
	{
		die("Error: " . mysql_error() . mysql_errno());
	}

	echo "Record added successfully...";

	mysql_close($con);
	
?>