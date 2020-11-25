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
			$_SESSION['user'] = $row['username'];
			$_SESSION['fullname'] = $row['fname'];
			$_SESSION['role'] = $row['role'];
			header("Location:dashboard.php");
			
			//checking roles for menu and operation purposes 
			/*if ($row['role']=="admin") {
				header("Location:dashboard.php");
			} else{
				header("Location:dashboard.php");
			}*/
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
		header("location:index.php");
	}
?>