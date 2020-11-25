<?php
	session_start();
	
	if (!isset($_SESSION['user'])) {
		?>
		<script type="text/javascript">
			alert("You are not logged in.");
			location="logout.php";
		</script>
		<?php
	}
	/*if ($_SESSION['role']!="admin") {
		?>
		<script type="text/javascript">
			alert("Unauthorised user not allowed");
			location="logout.php";
		</script>
		<?php
	}*/

	/*include_once('conn.php');

	function getNumOfClients(){
		include('conn.php');

		$rows = 0;

		$SQL = "SELECT * FROM tbl_client";
		$result = mysqli_query($connection, $SQL);
		if ($result){
			$rows = mysqli_num_rows($result);
		}
		
		return $rows;
		mysqli_close($connection);
	}

	function getNumOfPending(){
		include('conn.php');

		$rows = 0;

		$SQL = "SELECT * FROM tbl_soa WHERE soa_status='pending'";
		$result = mysqli_query($connection, $SQL);
		if ($result){
			$rows = mysqli_num_rows($result);
		}
		
		return $rows;
		mysqli_close($connection);
	}

	function getNumOfApproved(){
		include('conn.php');

		$rows = 0;

		$SQL = "SELECT * FROM tbl_soa WHERE soa_status='approved' and archived='no'";
		$result = mysqli_query($connection, $SQL);
		if ($result){
			$rows = mysqli_num_rows($result);
		}
		
		return $rows;
		mysqli_close($connection);
	}

	function getNumOfVouchers(){
		include('conn.php');
		
		$rows = 0;

		$SQL = "SELECT * FROM tbl_voucher";
		$result = mysqli_query($connection, $SQL);
		if ($result){
			$rows = mysqli_num_rows($result);
		}
		
		return $rows;
		mysqli_close($connection);
	}

	function getNumOfPayments(){
		include('conn.php');

		$rows = 0;

		$SQL = "SELECT * FROM tbl_collection";
		$result = mysqli_query($connection, $SQL);
		if ($result){
			$rows = mysqli_num_rows($result);
		}
		
		return $rows;
		mysqli_close($connection);
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Dashboard | Admin</title>

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

	<style>
		.card-height {
			height: 500px;
		}
	</style>


</head>
<body>
	<!-- navigation bar starts here -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<a class="navbar-brand" href="dashboard.php">BOACTS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="dashboard.php">Dashboard</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="clients.php">Clients</a>
				</li>
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
				<li class="nav-item">
					<a href="logout.php"><button type="button" class="btn btn-md btn-outline-secondary">Sign out</button></a>
				</li> 
			</ul>
		</div>
	</nav>
	<!-- navigation ends here -->

	<!-- album section -->
	<div class="album py-5 bg-light">
	    <div class="container"> <!-- start of container -->
	    	
	      <div class="row"> <!-- start of row -->
	        <!-- start or album card 1 -->
	        <div class="col-md-4 col-sm-12 col-xs-12">
	          <div class="card mb-4 shadow-lg">
	            <div class="card-body">
		          <h4 class="card-title">Customers</h4>
	            </div>
	          </div>
	        </div>
	        <!-- end of album card 1 -->

	        <!-- start or album card 2-->
	        <div class="col-md-4 col-sm-12 col-xs-12">
	          <div class="card mb-4 shadow-lg">
	            <div class="card-body">
		          <h4 class="card-title">SOA</h4>
	            </div>
	          </div>
	        </div>
	      <!-- end of album card 2-->

	      <!-- start or album card 3-->
	        <div class="col-md-4 col-sm-12 col-xs-12">
	          <div class="card mb-4 shadow-lg">
	            <div class="card-body">
		          <h4 class="card-title">Vouchers</h4>
	            </div>
	          </div>
	        </div>
	      <!-- end of album card 3-->
	      </div> <!-- end of row -->

	      <!-- start of row -->
	      <div class="row">
	      	<!-- start or album card 1-->
	        <div class="col-md-4 col-sm-12 col-xs-12">
	          <div class="card mb-4 shadow-lg">
	            <div class="card-body">
		          <h4 class="card-title">Reports</h4>
	            </div>
	          </div>
	        </div>
	      <!-- end of album card 1-->

	      <!-- start or album card 2-->
	        <div class="col-md-4 col-sm-12 col-xs-12">
	          <div class="card mb-4 shadow-lg">
	            <div class="card-body">
		          <h4 class="card-title">Collection</h4>
	            </div>
	          </div>
	        </div>
	      <!-- end of album card 2-->

	      <!-- start or album card 3-->
	        <div class="col-md-4 col-sm-12 col-xs-12">
	          <div class="card mb-4 shadow-lg">
	            <div class="card-body">
		          <h4 class="card-title">Charges</h4>
	            </div>
	          </div>
	        </div>
	      <!-- end of album card 3-->
	      
	      <!-- end of row -->
	      
	      
	    </div> <!-- end of container -->
  </div>
<!-- this is the admin page -->
</body>
</html>