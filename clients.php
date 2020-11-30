<!DOCTYPE html>
<html>
<head>
	<title>Clients | BOACTS</title>

	<!-- bootstrap, styles, and scripts -->
	<meta charset="utf-8">
    
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="landing-page.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/datatables.min.css">

	<!-- Fontawesome -->
	<!-- <link rel="stylesheet" type="text/css" href="../Fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="../Fontawesome/css/brands.min.css">
	<link rel="stylesheet" type="text/css" href="../Fontawesome/css/solid.min.css">
 -->
	<script src="jquery/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/datatables.min.js"></script>

</head>
<body>
<!-- navigation bar starts here -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<a class="navbar-brand" href="dashboard.php">BOACTS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- start of collapseable navbar -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- start of menu -->
			<ul class="navbar-nav ml-auto">
				<!-- start of menu items -->

				<!-- Main Dashboard Link -->
				<li class="nav-item">
					<a class="nav-link" href="dashboard.php">Dashboard</a>
				</li>

				<!-- Clients Page Link -->
				<li class="nav-item active">
					<a class="nav-link" href="clients.php">Clients</a>
				</li>

				<!-- SOA Page Link -->
				<li class="nav-item">
					<a class="nav-link" href="#">SOA</a>
				</li>

				<!-- Vouchers Page Link -->
				<li class="nav-item">
					<a class="nav-link" href="#">Vouchers</a>
				</li>

				<!-- Collections Page Link -->
				<li class="nav-item">
					<a class="nav-link" href="#">Collections</a>
				</li>

				<!-- Reports Page Link -->
				<li class="nav-item">
					<a class="nav-link" href="#">Reports</a>
				</li>

				<!-- Charges Page Link -->
				<li class="nav-item">
					<a class="nav-link" href="#">Charges</a>
				</li>

				<!-- Sign-out Link -->
				<li class="nav-item">
					<a href="logout.php"><button type="button" class="btn btn-md btn-outline-secondary">Sign out</button></a>
				</li> 
			</ul>
			<!-- end of menu -->
				<!-- end of list items -->
				<!--
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">SOA</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="soapending.php">Pending</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="soaapproved.php">Approved</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="soaprinting.php">Printing</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="charges.php">Charges</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="voucher.php">Vouchers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="collection.php">Collections</a>
				</li> -->
				
		</div>
		<!-- end of collapseable navbar -->
	</nav>
	<!-- navigation ends here -->

</body>
</html>