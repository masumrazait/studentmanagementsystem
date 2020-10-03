<!DOCTYPE html>
<html>
<head>
	<title>database</title>
</head>
<body>
<h1>Hello Masum Please Submit the Data</h1>
<form action="masum.php" method="post">
	<label>Name</label>
	<input type="text" name="name" required="required" placeholder="enter the your name:">
	<label>Contect</label>
	<input type="text" name="cont" required="required" placeholder="enter your mobile number">
	<label>Age</label>
	<input type="text" name="age" required="required" placeholder="enter your age">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','','masum');
	if($con == false)
	{
		echo"connection is not done";
	}else
	{
		echo "connection is done";
	}

	$name=$_POST['name'];
	$cont=$_POST['cont'];
	$age=$_POST['age'];

	$qry="INSERT INTO `mahi`(`name`, `cont`, `age`) VALUES ('$name','$cont','$age')";

	$run=mysqli_query($con,$qry);
}
	?>


