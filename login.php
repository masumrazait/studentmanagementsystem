<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>


<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
</head>
<body bgcolor="pink">
	<h1 align="center"><b>Admin Login</b></h1>
	<form action="login.php" method="post">
		<table align="center" border="1">
			<tr>
				<td><b>Username</b></td><td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td><b>Password</b></td><td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php

include('dbcon.php');
if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	
	$qry ="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row <1)
	{
		?>
		<script>
			alert('Username and password are not match !!');
			$window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data =mysqli_fetch_assoc($run);
		$id = $data['id'];
		
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}
?>