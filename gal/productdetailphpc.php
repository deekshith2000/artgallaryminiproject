<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['exdetails'])){
    $name=$_POST['name'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    $style=$_POST['style'];
    $query="insert into tbl_product(name,image,price,style) values
     ('$name','$image','$price','$style')";
    $result=mysqli_query($con,$query);
    }
    include 'details.php';
    echo"<script type='text/javascript'>alert('Details Added');</script>";
?>