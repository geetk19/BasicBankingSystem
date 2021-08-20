<?php

	$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo 'Not Connected to Server';
	}

	if(!mysqli_select_db($con,'bankuser'))
	{
		echo 'Database not selected';
	}

	$Name = $_POST['name'];
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];
	$Message = $_POST['message'];

	$sql = "INSERT INTO feedback (name,phone,email,message) VALUES ('$Name','$Phone','$Email','$Message')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
?>