<!DOCTYPE html>
<html>
<head>
  <title>Order Details</title>
  <style>
body {
  background-image: url('assets/images/arts_photos/hd.jpg');
}
</style>
</head>
<body>

<h1 align="center">Art Gallery Management</h1>
<h2>Order Details:</h2>
</body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
$sql = "select * from orders";
$result = mysqli_query($con, $sql);
echo "<table border='2'>
          <tr>
          <th>Order ID </th>
          <th>Customer Email</th>
          <th>Art ID</th>
          <th>Price</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['order_id']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['final_price']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else {
     print_r(mysqli_fetch_array($result));
}
?>
<html>
    <title></title>
    <body>
      <button><a href="details.php">Back<a></button>
    </body>
</html>