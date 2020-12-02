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
				<div class="modal-dialog modal-dialog-scrollable">
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
									<input type="text" class="form-control" name="client_id" required>
								</div>
								<!-- label and text control for fullname -->
								<div class="row form-group">
									<label class="control-label">Full Name</label>
									<input type="text" class="form-control" name="client_name" required>
								</div>
								<!-- label and text control for vat type -->
								<div class="row form-group">
									<label class="control-label">VAT Type</label>
									<input type="text" class="form-control" name="client_vat_type" required>
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
									<input type="text" class="form-control" name="client_trade_name" required>
								</div>
								<!-- label and text control for line of business -->
								<div class="row form-group">
									<label class="control-label">Line of Business</label>
									<input type="text" class="form-control" name="client_line_of_business" required>
								</div>
								<!-- label and text control for business address -->
								<div class="row form-group">
									<label class="control-label">Address</label>
									<input type="text" class="form-control" name="client_address" required>
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
							<button type="submit" class="btn btn-primary btn-sm">Save</button>
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

		<!-- start of third row -->
		<!-- start of client listing -->
		<div class="container-fluid">
			<div class="container spacer">
				<!-- start of client table -->
				<table class="table table-striped table-bordered table-hover table-sm" id="data-table">
					<thead class="thead-dark">

							<th>ID</th>
							<th>Full Name</th>
							<th>VAT Type</th>
							<th>RDO</th>
							<th>Details</th>
							<th>Edit</th>
							<th>Delete</th>

					</thead>
					<tbody>
						<?php
							include('conn.php');

							$SQL = "SELECT * FROM tbl_client";

							$result = mysqli_query($connection, $SQL);

							while($row=mysqli_fetch_assoc($result)){

								?>
								<tr>
									<td><?php echo $row['client_id']; ?></td>
									<td><?php echo $row['client_name']; ?></td>
									<td><?php echo $row['client_vat_type']; ?></td>
									<td><?php echo $row['client_rdo']; ?></td>
									<td><?php echo $row['client_tin']; ?></td>
									<td><?php echo $row['client_trade_name']; ?></td>
									<td><?php echo $row['client_line_of_business']; ?></td>
									<td><?php echo $row['client_address']; ?></td>
									<td><?php echo $row['client_email']; ?></td>
									<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#EditModal<?php echo $row['client_id']?>">Edit</button></td>
				<!-- edit modal -->
				<div class="modal fade" data-keyboard="false" data-backdrop="static" id="EditModal<?php echo $row['client_id']?>" tabindex="-1" aria-hidden="true">
					<!-- modal dialog -->
					<div class="modal-dialog modal-md modal-dialog-scrollable modal-modified">
						<!-- modal content -->
						<div class="modal-content">
							<!-- header -->
							<div class="modal-header">
								<h4 class="modal-title">Edit Client</h4>
								<button class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- end of header -->
							<!-- body -->
							<div class="modal-body">
								<div class="container-fluid">
								<form class="form" method="POST" action="editclient.php">
									<div class="row form-group">
										<label class="control-label">Client ID</label>
										<input type="text" class="form-control" name="client_id" value="<?php echo $row['client_id'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">Full Name</label>
										<input type="text" class="form-control" name="client_name" value="<?php echo $row['client_name'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">VAT Type</label>
										<input type="text" class="form-control" name="client_vat_type" value="<?php echo $row['client_vat_type'];?>">
										<!-- <input type="text" class="form-control" name="client_name"> -->
									</div>
									<div class="row form-group">
										<label class="control-label">RDO</label>
										<input type="text" class="form-control" name="client_rdo" value="<?php echo $row['client_rdo'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">TIN</label>
										<input type="text" class="form-control" name="client_tin" value="<?php echo $row['client_tin'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">Tradename</label>
										<input type="text" class="form-control" name="client_trade_name" value="<?php echo $row['client_trade_name'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">Line of Business</label>
										<input type="text" class="form-control" name="client_line_of_business" value="<?php echo $row['client_line_of_business'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">Address</label>
										<input type="text" class="form-control" name="client_address" value="<?php echo $row['client_address'];?>">
									</div>
									<div class="row form-group">
										<label class="control-label">Email</label>
										<input type="text" class="form-control" name="client_email" value="<?php echo $row['client_email'];?>">
									</div>
								</div>
							</div>
							<!-- end of body -->
							<!-- footer -->
							<div class="modal-footer">
									<button type="submit" class="btn btn-primary btn-sm">Save</button>
									<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
								</form>
							</div>
							<!-- end of footer -->
						</div>
						<!-- end of modal content -->
					</div>
					<!-- end of modal dialog -->
				</div>
				<!-- end of edit modal -->
									<td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteModal<?php echo $row['client_id'];?>">Delete</button></td>
									<!-- delete modal -->
				<div class="modal fade" data-keyboard="false" data-backdrop="static" id="DeleteModal<?php echo $row['client_id'];?>" tab-index="-1" aria-hidden="true">
					<!-- modal dialog starts here -->
					<div class="modal-dialog modal-md">
						<!-- modal content starts here -->
						<div class="modal-content">
							<!-- modal header starts here -->
							<div class="modal-header">
								<h4 class="modal-title">Delete Client</h4>
								<button class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- modal header ends here -->
							<!-- modal body starts here -->
							<div class="modal-body">
								<div class="container">
									Are you sure to delete this client?<br>
									<?php echo $row['client_name'];?>
								</div>
							</div>
							<!-- modal body ends here -->
							<!-- modal footer starts here -->
							<div class="modal-footer">
								<a href="deleteclient.php?id=<?php echo $row['client_id'];?>" class="btn btn-danger btn-sm">Delete</a>
								<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
							</div>
							<!-- modal footer ends here -->
						</div>
						<!-- modal content ends here -->
					</div>
					<!-- modal dialog ends here -->
				</div>
									<!-- end of delete modal -->
								</tr>
								<?php
							}
						?>
					</tbody>
				</table>
				<!-- end of client table -->
			</div>
		</div>
		<!-- end of client listing -->
		<!-- end of third row -->

	</div>
	<!-- end of client container -->

</body>
<script type="text/javascript">
	
	$('#data-table').DataTable({
		lengthMenu: [[5,10,25,-1],[5,10,25,"All"]]
	});

</script>
</html>