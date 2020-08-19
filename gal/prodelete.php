<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['exdetails']))
{

$id=$_POST['id'];
$sql="DELETE FROM tbl_products WHERE id='$id'";
$result=mysqli_query($con,$sql);
}
include 'details.php';
echo"<script type='text/javascript'>alert('Details Deleted');</script>";
?>