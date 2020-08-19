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
  <nav align="right"><strong><a href="userpage.php">Logout</a></strong></nav>
	<h1 align="center">Art Gallery Management</h1>
	<h1 align="center">Welcome Admin</h1>
<div>
 <h1>Order Details</h1>
  <button><a href="orderdetail.php">View Orders<a></button>
</div>
<div class="container">
<div>
 <h1>Exhibition Details</h1>
  <button><a href="exhibition.php">Add Details<a></button>
  <button><a href="exedet.php">Delete Details<a></button>
</div>
</div>
<div>
 <h1>Artist Details</h1>
  <button><a href="artistdetail.php">Add Details<a></button>
  <button><a href="artisttable.php">Delete Details<a></button>
</div>
<div>
 <h1>Product Details</h1>
 <button><a href="productdetail.php">Add Product<a></button>
</div>
</body>
</html>
