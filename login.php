<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<div class="container-fluid col-sm-6 col-md-6 col-lg-6">
		<h2>Login</h2>
		<form action="login2.php?op=in" method="POST">
			<!-- username field -->
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<!-- password field -->
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="">
			</div>
			<!-- submit button -->
			<div class="form-group">
				<input type="submit" class="form-control btn btn-primary" value="LOGIN">
				<a href="index.php" class="form-control btn btn-danger">Return to Main Page</a>
			</div>
		</form>
	</div>
</div>
</body>
</html>