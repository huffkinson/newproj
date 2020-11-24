<?php
	// $connection = new mysqli('localhost','boteacts-client','TLKTb!QN8t1}','boteacts_db') or die();
	// $connection = new mysqli('localhost','id12256582_bote','bote2020','id12256582_bote') or die();
// 	$connection = new mysql('localhost','root','root','billing') or die(mysqli_error());
// 

	$connection = new mysqli("localhost","root","root","billing");

// Check connection
if ($connection -> connect_errno) {
  	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>