<!DOCTYPE html>
<html>
<head>
	<title>Clients | BOACTS</title>

	<!-- bootstrap, styles, and scripts -->
	<meta charset="utf-8">
    
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="landing-page.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
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

	<style type="text/css">
		/*.spacer{
			margin-top: 0.5em;
		}
		.button-margin{
			margin-left: 0.5em;
			margin-right: 0.5em;
		}*/
	</style>

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

	<!-- start of client container -->
	<div class="container-fluid">
		<!-- start of first row -->
		<div class="row justify-content-center bg-primary text-light">
			<h2><b>Client Listing</b></h2>
		</div>
		<!-- end of first row -->

		<!-- start of second row -->

		<div class="row spacer justify-content-center">			
			<!-- Add New Modal Link -->
			<a href="#AddNew" class="btn btn-primary btn-sm" data-toggle="modal">Add New</a>

			<!-- Add New Modal Dialog -->
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="AddNew" tabindex="-1" aria-hidden="true">

				<!-- start of modal dialog -->
				<div class="modal-dialog modal-lg modal-dialog-scrollable">
					<!-- start of modal content -->
					<div class="modal-content">
						<!-- start of modal header -->
						<div class="modal-header">
							<h4 class="modal-title">Add New Client</h4>
							<button class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- end of modal header -->
						
						<!-- start of modal body -->
						<div class="modal-body">
							<div class="container-fluid">
							<!-- start of form -->
								<form class="form" method="POST" action="#">
								<!-- label and text control for client id -->
								<div class="row form-group">
									<label class="control-label">Client ID</label>
									<input type="text" class="form-control" name="client_id">
								</div>
								<!-- label and text control for fullname -->
								<div class="row form-group">
									<label class="control-label">Full Name</label>
									<input type="text" class="form-control" name="client_name">
								</div>
								<!-- label and text control for vat type -->
								<div class="row form-group">
									<label class="control-label">VAT Type</label>
									<input type="text" class="form-control" name="client_vat_type">
									<!-- <input type="text" class="form-control" name="client_name"> -->
								</div>
								<!-- label and text control for rdo -->
								<div class="row form-group">
									<label class="control-label">RDO</label>
									<input type="text" class="form-control" name="client_rdo">
								</div>
								<!-- label and text control for tin -->
								<div class="row form-group">
									<label class="control-label">TIN</label>
									<input type="text" class="form-control" name="client_tin">
								</div>
								<!-- label and text control for tradename -->
								<div class="row form-group">
									<label class="control-label">Tradename</label>
									<input type="text" class="form-control" name="client_trade_name">
								</div>
								<!-- label and text control for line of business -->
								<div class="row form-group">
									<label class="control-label">Line of Business</label>
									<input type="text" class="form-control" name="client_line_of_business">
								</div>
								<!-- label and text control for business address -->
								<div class="row form-group">
									<label class="control-label">Address</label>
									<input type="text" class="form-control" name="client_address">
								</div>
								<!-- label and text control for email address -->
								<div class="row form-group">
									<label class="control-label">Email</label>
									<input type="email" class="form-control" name="client_email">
								</div>
							</div>
						</div>
						<!-- end of modal body -->
						<!-- start of modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>

							</form>
							<!-- end of form -->
						</div>
						<!-- end of modal footer -->
					</div>
					<!-- end of modal content -->
				</div>
				<!-- end of modal dialog -->
			</div>

		</div>
		<!-- end of second row -->

	</div>
	<!-- end of client container -->

</body>
</html>