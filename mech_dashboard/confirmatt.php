<?php
	include('../connection.php');

	$id = $_GET['Request_ID'];

	$delete = $connection->query("UPDATE requests SET closed='2' WHERE Request_ID='$id'");
	header('location:responded.php');
?>
