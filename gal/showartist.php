<!DOCTYPE html>
<html>
<head>
	<title>Artist Details</title>
	<style>
		body {
  background-image: url('assets/images/arts_photos/hd.jpg');
}
	</style>
</head>
<body>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['buyorder'])){
$id = $_POST['id'];
$query="select * from artist where id=$id";
$result=mysqli_query($con,$query);
echo "<table border='2'>
          <tr>
          <th>Artist ID </th>
          <th>Artist Name</th>
          <th>Artist Address</th>
          <th>Phone</th>
          <th>Painting Style</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['artist_id']."</td>";
            echo "<td>".$row['artist_name']."</td>";
            echo "<td>".$row['artist_address']."</td>";
            echo "<td>".$row['artist_phone']."</td>";
            echo "<td>".$row['painting_style']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else {
     print_r(mysqli_fetch_array($result));
}
}

?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h2>Go Back to Purchase</h2>
		 <form action="products.php" method = "post">
        <button type = "submit" name="exdetails">Back</button>
  </form>
	</div>

</body>
</html>