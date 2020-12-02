<!DOCTYPE html>
<html>
<head>
	<title>Charges | BOACTS</title>
	<!-- bootstrap, styles, and scripts -->
	<meta charset="utf-8">
    
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="landing-page.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/datatables.min.css">

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
				<li class="nav-item">
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
				<li class="nav-item active">
					<a class="nav-link" href="charges.php">Charges</a>
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

	<!-- start of charges container -->
	<div class="container-fluid">

		<!-- start of charges header -->
		<div class="row justify-content-center bg-dark text-light">
			<h2><b>Charges Listing</b></h2>
		</div>
		<!-- end of charges header -->

		<!-- start of buttons section -->
		<div class="row justify-content-center spacer">
			<!-- add new charges button-->
			<a href="#AddNew" class="btn btn-primary btn-sm" data-toggle="modal">Add New</a>

			<!-- start of add new charges modal dialog -->
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="AddNew" tabindex="-1" aria-hidden="true">
				<!-- start of modal dialog -->
				<div class="modal-dialog modal-dialog-scrollable">
					<!-- start of modal dialog content  -->
					<div class="modal-content">
						<!-- start of modal header -->
						<div class="modal-header">
							<h4 class="modal-title">Add New Charge</h4>
							<button class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- end of modal header -->
						<!-- start of modal body -->
						<div class="modal-body">
							<div class="container-fluid">

							</div>
						</div>
						<!-- end of modal body -->
						<!-- start of modal footer -->
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary btn-sm">Save</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
							<!-- end of form -->
						</div>
						<!-- end of modal footer -->
					</div>
					<!-- end of modal dialog content  -->
				</div>
			</div>
			<!-- end of add new charges modal dialog -->
		</div>
		<!-- end of buttons section -->

		<!-- start of charges data table listing -->
		<div class="container">
		<div class="row justify-content-center spacer">
			<!-- start of data table -->
			<table class="table table-striped table-bordered table-hover table-sm" id="data-table">
				<!-- start of table head -->
				<thead class="thead-dark">
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Default Value</th>
					<th>Edit</th>
				</thead>
				<!-- end of table head -->
				<!-- start of table body -->
				<tbody>
					<?php
						include('conn.php');
						$SQL = "SELECT * FROM tbl_charges";

						$result = mysqli_query($connection, $SQL);
						while($row=mysqli_fetch_assoc($result)){
					?>
					<!-- fill table with rows from database -->
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['amount']; ?></td>
						<td>edit</td>
					</tr>
					<?php
						}
					?>
				</tbody>
				<!-- end of table body -->
			</table>
			<!-- end of data table -->
		</div>
		</div>
		<!-- end of charges data table listing -->

		

	</div>													
	<!-- end of charges container -->

</body>
<script type="text/javascript">
	
	$('#data-table').DataTable({
		lengthMenu: [[5,10,25,-1],[5,10,25,"All"]]
	});

</script>
</html>