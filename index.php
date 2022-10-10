<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<form method="POST" action="">
	<label>Name</label>
	<input type="text" name="txtname"><br>

	<label>Password</label>
	<input type="password" name="txtpass"><br>

	<label>Email</label>
	<input type="text" name="txtemail"><br>

	<input type="submit" name="btnsub">
</form>
</body>
</html>


<?php 

	/*Database Connection*/
	/*$connection = mysqli_connect("host_name","username","password","database_name");*/
	$connection = mysqli_connect("localhost","root","","crud_project");

	/*if($connection==TRUE)
	{
		echo "Connected";
	}
	else
	{
		echo "Not Connected";
	}*/

if (isset($_POST['btnsub'])) 
{	
	/*Form Fields*/
	$name = $_POST['txtname'];
	$pass = md5($_POST['txtpass']);
	$email = $_POST['txtemail'];

	/*$query = mysqli_query(connection,query);*/
	$query = mysqli_query($connection,"insert into users(name,pass,email) values('$name','$pass','$email')");

	if($query>0)
	{
		echo "Data inserted";
	}
	else
	{
		echo "Data Not inserted";
	}
}
 ?>