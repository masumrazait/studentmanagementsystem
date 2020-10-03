<?php
session_start();
if(isset($_SESSION['uid']))
	{
		echo"";
	}
	else
	{
		header('location:../login.php');
	}
?>

<?php
//include Header file.
	include('header.php');

//include Titlehead file.	
	include('titlehead.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width:70%; margin-top: 40px;">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter your Roll No" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter your Full Name" required></td>
		</tr><tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter your City" required></td>
		</tr><tr>
			<th>Parents Contect No</th>
			<td><input type="text" name="pcon" placeholder="Enter your Parents Contect No" required></td>
		</tr><tr>
			<th>Email</th>
			<td><input type="Email" name="email" placeholder="Enter your Email" required></td>
		</tr><tr>
			<th>Standerd</th>
			<td><input type="number" name="std" placeholder="Enter your Standerd" required></td>
		</tr><tr>
			<th>Image</th>
			<td><input type="file" name="simg" placeholder="Enter your Roll No" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>

<!--php with db connectivity -->
<?php
if(isset($_POST['submit']))
{
	//MySql connectivity file Name dbcon
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$email=$_POST['email'];
	$std=$_POST['std'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");

	

//insert in Database.
	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `email`, `standerd`,`image`) VALUES ('$rollno','$name','$city','$pcon','$email','$std','$simg')";

	//echo $qry;

	$run= mysqli_query($con,$qry);

	if($run== true)
	{
		?>
		<script>
			alert('Data Inserted Successfully.');
		</script>
		<?php
	}
}
?>
