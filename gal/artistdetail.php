<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
<style>
  body {
  background-image: url('assets/images/arts_photos/hd.jpg');
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: black;
  font-size: 22px;
}
.buy {
  color: red;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #0000FF;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.color {
  color: black;
}
.container{
    display: flex;
}
</style>
</head>
<body bgcolor="skyblue">
	<h1 align="center">Art Gallery Management</h1>
<div class="container">
<div class="" align="center">
 <h1>Artist Details</h1>
  <form action="artistphpc.php" method = "post" align="center">
        <label>Artist Name:</label> <input type="text"  required="required" name="artist_name"><br /><br />
        <label>Artist Address:</label> <input type="text"  required="required" name="artist_address"><br />
        <br />
        <label>Artist Phone:</label> <input type="text"  required="required" name="artist_phone"><br /><br />
        <label>Painting Style:</label> <input type="text"  required="required" name="painting_style"><br /><br />
        <label>Art ID:</label> <input type="text"  required="required" name="id"><br /><br />
        <button type = "submit" name="exdetails">Add Details</button>
    </form>
</div>
</div>
</body>
</html>