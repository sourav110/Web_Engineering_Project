<?php
	
	$con = mysql_connect("localhost", "root", "");

	if (!$con) 
	{
		die("Could not connect: " . mysql_errno());
		exit();
	} 
	
	// echo "Connected";

	mysql_select_db("zettabyte", $con);

	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$subject = $_POST['subject'];	
	$message = $_POST['message'];

	$sql = "INSERT INTO contact (name, email, phone, company, subject, message) 
		VALUES ('$name', '$email', '$phone', '$company', '$subject', '$message')";

	
	if (!mysql_query($sql, $con)) 
	{
		die("Error: " . mysql_error() . mysql_errno());
	}

	echo "Record added successfully...";

	mysql_close($con);
	
?>