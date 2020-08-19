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
 <h1>Exhibition Details</h1>
  <form action="exdetails.php" method = "post" align="center">
        <label for="ex_name">Exhibition Name:</label> <input type="text"  required="required" name="ex_name"><br /><br />
        <label for="ex_place">Exhibition Place:</label> <input type="text"  required="required" name="ex_place"><br /><br />
        <label for="place">Exhibition Start Date:</label> <input type="date"  required="required" name="start_date"><br /><br />
        <label for="place">Exhibition End Date:</label> <input type="date"  required="required" name="end_date"><br /><br />
        <label for="name">Organizer Name:</label> <input type="text"  required="required" name="organiser"><br /><br />
        <label for="contact">Organizer Contact:</label> <input type="tel"  required="required" name="org_contact"><br /><br />
        <button type = "submit" name="exdetails">Add Details</button>
    </form>
</div>
</div>
</body>
</html>