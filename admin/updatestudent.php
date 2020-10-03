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

<table align="center">
	<form action="updatestudent.php" method="post">
		<tr>
			<th>Enter Standerd</th>
			<td><input type="number" name="standerd" placeholder="Enter Standerd" required="required"/></td>

			<th>Enter Student Name</th>
			<td><input type="text" name="stuname " placeholder="Enter Standerd" required="required"/></td>
			<td colspan="2"><input type="submit" name="submit" value="Search" /></td>
		</tr>
	</form>
</table>
<table align="center" width="80%">
	<tr>
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll No</th>
		<th>Edit</th>
	</tr>


<?php
if(isset($_POST['submit']))
{
//Mysql Connectivity
	include('../dbcon.php');
	$standerd=$_POST['standerd'];
	$name=$_POST['stuname'];

	$qry="SELECT * FROM `student` WHERE `standerd`='standerd' AND `name` like '%name%'";
	$run=mysqli_query($con,$qry);

	if(mysqli_num_rows($run)<1)
	{
		echo"<tr><td colspan='5'> No Records Found</td></tr>";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['rollno']; ?></td>
				<td>Edit</td>
			</tr>

		}
}
</table>
?>