<?php
	include('conn.php');
	
	// remove when ready to upload to server
	error_reporting(E_ALL);
	ini_set('display_errors', 1);


	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$amount = $_POST['amount'];
	

	$SQL = "INSERT INTO tbl_charges(name,description,amount) VALUES('$name','$description','$amount')";

	// mysqli_query($connection, $SQL);
	$result = $connection->query($SQL);
	if (!$result) {
		// header('location: charges.php');
   		printf("%s\n", $connection->error);
   		exit();
	}
	
	header('location: charges.php');
?>