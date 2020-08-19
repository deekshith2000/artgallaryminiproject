<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['exdetails'])){
    $artist_name=$_POST['artist_name'];
    $artist_address=$_POST['artist_address'];
    $artist_phone=$_POST['artist_phone'];
    $painting_style=$_POST['painting_style'];
    $id=$_POST['id'];
    $query="insert into artist(artist_name,artist_address,artist_phone,painting_style,id) values
     ('$artist_name','$artist_address','$artist_phone','$painting_style','$id')";
    $result=mysqli_query($con,$query);
    }
    include 'details.php';
    echo"<script type='text/javascript'>alert('Details Added');</script>";
?>