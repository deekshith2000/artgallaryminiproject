<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
$sql = "select * from tbl_product";
$result = mysqli_query($con, $sql);
echo "<table border='2'>
          <tr>
          <th>Product ID </th>
          <th>Product Name</th>
          <th>Product Image</th>
          <th>Price</th>
          <th>Product Style</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['image']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['style']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else {
     print_r(mysqli_fetch_array($result));
}
?>
  <form action="prodelete.php" method = "post" align="center">
  		<h2>Delete Product</h2>
        <label>Enter Product ID:</label> <input type="text" required="required" name="id"><br /><br />
        <button type = "submit" name="exdetails">Delete Details</button>
  </form>
