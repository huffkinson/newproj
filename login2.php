<?php
	session_start();
	include('conn.php');
	$username = $_POST['username'];
	$password = $_POST['password'];

	$op = $_GET['op'];

	if ($op=="in") {
		$SQL = "SELECT * FROM tbl_users WHERE username = '$username' and password = '$password'";
		$result = mysqli_query($connection, $SQL);
		$row = mysqli_num_rows($result);

		if ($row==1) {
			$row = mysqli_fetch_array($result);
			$_SESSION['username'] = $row['username'];
			$_SESSION['fullname'] = $row['fname'];
			$_SESSION['role'] = $row['role'];
			 
			if ($row['role']=="admin") {
				header("Location:index.php");
			} else{
				header("Location:index.php");
			}
		} else {
			?>

			<script language="JavaScript" type="text/javascript">
				alert('Username and Password not register or is invalid');
				document.location='login.php';
			</script>

			<?php
		} 
	} elseif ($op=="out") {
		unset($_SESSION['user']);
		unset($_SESSION['level']);
		header("location:login.php");
	}
?>