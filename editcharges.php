<?php
	include('conn.php');
	
	// remove when ready to upload to server
	// error_reporting(E_ALL);
	// ini_set('display_errors', 1);


	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$amount = $_POST['amount'];
		
		$SQL = "UPDATE tbl_charges SET name='$name', description='$description', amount='$amount' WHERE id='$id'";
		//mysqli_query($connection, $SQL);


		// mysqli_query($connection, $SQL);
		$result = $connection->query($SQL);
		if (!$result) {
			// header('location: charges.php');
	   		printf("%s\n", $connection->error);
	   		exit();
		}
	}

	
	
	header('location: charges.php');
?>