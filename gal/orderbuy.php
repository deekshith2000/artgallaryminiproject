<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['buyorder'])){
$id = $_POST['id'];
$email=$_POST['email'];
 
$query="insert into orders (email,id) values('$email','$id')";
$result=mysqli_query($con,$query);
}
$price="update orders set final_price=(select price from tbl_product where id=$id) where id=$id";
$result=mysqli_query($con,$price);
include 'userpage1.php';
echo"<script type='text/javascript'>alert('Order Placed');</script>";
?>
</body>
</html>