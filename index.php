<!DOCTYPE html>
<?php
	// $connection = new mysqli('localhost','boteacts-client','TLKTb!QN8t1}','boteacts_db') or die();
	// $connection = new mysqli('localhost','id12256582_bote','bote2020','id12256582_bote') or die();
	$connection = new mysqli('localhost','root','root','billing') or die(mysqli_error());
?>

<html>
<head>
	<title>Bote Accounting and Taxation Services</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Navigation starts here -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<a class="navbar-brand" href="#">Bote Accounting and Taxation Services</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li>
				<!--
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Services</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Photography</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Portfolio</a>
					</div>
				</li> -->

				<li class="nav-item">
					<a href="login.php"><button type="button" class="btn btn-md btn-outline-secondary"> Login</button></a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Navigation ends here -->
	<div class="container">
		Under construction.
	</div>

	<script src="jquery/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>