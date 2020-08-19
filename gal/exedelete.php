<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['exdetails']))
{

$ex_name=$_POST['ex_name'];
$sql="DELETE FROM exhibition WHERE ex_name='$ex_name'";
$result=mysqli_query($con,$sql);
}
include 'details.php';
echo"<script type='text/javascript'>alert('Details Deleted');</script>";
?>