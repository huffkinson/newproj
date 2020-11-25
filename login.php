<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
    
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="landing-page.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		
		body{
			background-color: white;
		}

		.login-form{
			margin-top: 50px;
			box-shadow: 0px 0px 10px 1px grey;
			border-radius: 5px;
			padding-bottom: 20px;
			background: white;
		}

		.login-title{
			background: #007bbf;
			padding: 10px;
			text-align: center;
			color: #fff;
			border-radius: 0px 0px 10px 10px;
		}

	</style>

</head>
<body>
	<div class="container">
				<div class="login-form offset-md-4 col-sm-6 col-md-6 col-lg-4">
					
						<h2 class="login-title">Login</h2>
					
					<form action="login2.php?op=in" method="POST">
						<!-- username field -->
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<!-- password field -->
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<!-- submit button -->
						<div class="form-group">
							<input type="submit" class="form-control btn btn-primary" value="LOGIN">
						</div>
						<div class="form-group">
							<a href="index.php" class="form-control btn btn-danger">Return to Main Page</a>
						</div>
					</form>
				</div>
	</div>
	
	<script src="jquery/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/datatables.min.js"></script>
</body>
</html>