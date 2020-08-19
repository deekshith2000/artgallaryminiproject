<html>
<head>
    <title>Delete Exhibition</title>
     <style>
body {
  background-image: url('assets/images/arts_photos/hd.jpg');
}
</style>
</head>
    <body>
      <h1 align="center">Art Gallery Management</h1>
      <h2>Exhibition Details:</h2>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
$sql = "select * from artist";
$result = mysqli_query($con, $sql);
echo "<table border='2'>
          <tr>
          <th>Artist ID </th>
          <th>Artist Name</th>
          <th>Artist Address</th>
          <th>Artist Phone</th>
          <th>Painting Style</th>
          <th>Art ID</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['artist_id']."</td>";
            echo "<td>".$row['artist_name']."</td>";
            echo "<td>".$row['artist_address']."</td>";
            echo "<td>".$row['artist_phone']."</td>";
            echo "<td>".$row['painting_style']."</td>";
            echo "<td>".$row['id']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else {
     print_r(mysqli_fetch_array($result));
}
?>
  <form action="artistdel.php" method = "post" align="center">
  		<h2>Delete Artist</h2>
        <label>Enter Artist ID:</label> <input type="text" required="required" name="artist_id"><br /><br />
        <button type = "submit" name="exdetails">Delete Details</button>
  </form>
