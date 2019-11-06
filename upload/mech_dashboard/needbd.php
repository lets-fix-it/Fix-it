<?php
	include('../connection.php');
	session_start();

	$name = $_POST['name'];
	$cartype = $_POST['cartype'];
	$location = $_POST['location'];
	$datepicker = $_POST['datepicker'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$reason = $_POST['reason'];
	$member = $_POST['member'];


// echo "<pre>";
// 	print_r($_POST);
// 	exit();

	$insert = $connection->query("INSERT INTO requests(Name,Car_Type,Location,Date_Requested,Address,Email,Phone,Reason,Member) VALUES ('$name', '$cartype', '$location', '$datepicker', '$address','$email', '$phone','$reason', '".$_SESSION['membername']."')");
	// $r = "INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, pincode, phone, image, username_fk) VALUES ('$name', '$fathername', '$gender', '$datepicker', '$weight', '$email', '$state', '$city', '$pincode', '$phone', '$address', '$location',)";
	// echo $r;
	// exit();
	
	if($insert){
		header('location:request.php');
	}else {
		header('location:request.php');
	}
?>