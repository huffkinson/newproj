<?php
	include('conn.php');

	
	$name = $_POST['client_name'];
	$description = $_POST['client_vat_type'];
	$amount = $_POST['client_rdo'];
	

	$SQL = "INSERT INTO tbl_charges(name,description,amount) VALUES('$id','$name','$description','$amount')";

	mysqli_query($connection, $SQL);
	
	header('location: charges.php');
?>