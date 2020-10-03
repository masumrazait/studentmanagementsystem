
<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
</head>
<body bgcolor="yellow">
	<h1 align="center"><b><i>Welcome To Student Management System</i></b></h1>
	<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
	<form method="post" action="index.php">
		<table style="width: 30%" align="center" border="1">
			<tr>
				<td colspan="2" align="center"><b>Student Information</b></td>
			</tr>
			<tr>
				<td align="left">Choose Standerd</td>
				<td>
					<select name="std" required>
						<option value="1">1st</option>
						<option value="2">2nd</option>
						<option value="3">3rd</option>
						<option value="4">4th</option>
						<option value="5">5th</option>
						<option value="6">6th</option>
						<option value="7">7th</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="left">Enter Rollno</td>
				<td><input type="text" name="rollno" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="show Info"></td>
			</tr>
		</table>
	</form>
</body>
</html>