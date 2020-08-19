<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['user_login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from login where email='$email' and password='$password'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		if($row['email']==$email && $row['password']==$password){
			header("Location:userpage1.php");
		}
	}
	if($row['email']!=$email || $row['password']!=$password){
		include 'index.php';
		echo"<script type='text/javascript'>alert('Email or Password is incorrect');</script>";

	}
}



if(isset($_POST['user_signup'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$query="insert into login(username,email,password,address,phone) values ('$username','$email','$password','$address','$phone')";
	$result=mysqli_query($con,$query);
		if($result){
			header("Location:userpage1.php");
		}
}














?>