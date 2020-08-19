<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['exdetails']))
{

$artist_id=$_POST['artist_id'];
$sql="DELETE FROM artist WHERE artist_id='$artist_id'";
$result=mysqli_query($con,$sql);
}
include 'details.php';
echo"<script type='text/javascript'>alert('Details Deleted');</script>";
?>