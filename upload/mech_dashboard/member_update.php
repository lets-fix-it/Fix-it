<?php
	include('../connection.php');
	session_start();

	$password = $_POST['password'];
	$email = $_POST['email'];
	$member = $_SESSION['membername'];
	

// echo "<pre>";
// 	print_r($_POST);
// 	exit();

	$update = $connection->query("UPDATE users SET password='$password',email='$email' WHERE username='".$_SESSION['membername']."'");
	// $r = "INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, pincode, phone, image, username_fk) VALUES ('$name', '$fathername', '$gender', '$datepicker', '$weight', '$email', '$state', '$city', '$pincode', '$phone', '$address', '$location',)";
	// echo $r;
	// exit();
	
	if($update){
		$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
	if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
	session_destroy();
	session_unset($_SESSION['username']);
	session_unset($_SESSION['member_id']);
	header('location:../index.php');
		
	}else {
		echo "Error!";
	}
?>