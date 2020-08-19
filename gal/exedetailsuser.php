<!DOCTYPE html>
<html>
<head>
  <title>Exhibition Details</title>
  <style>
body {
  //background-image: url('assets/images/arts_photos/vx.jpg');
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
$sql = "CALL exhibitiondetail";
$result = mysqli_query($con, $sql);
echo "<table border='2'>
          <tr>
          <th>Exhibition Name</th>
          <th>Exhibition Place</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Organiser</th>
          <th>organiser Contact</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['ex_name']."</td>";
            echo "<td>".$row['ex_place']."</td>";
            echo "<td>".$row['start_date']."</td>";
            echo "<td>".$row['end_date']."</td>";
            echo "<td>".$row['organiser']."</td>";
            echo "<td>".$row['org_contact']."</td>";
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
    	<form action="userpage1.php"><button>Back</button></form>
    	
    </body>
</html>