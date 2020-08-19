<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "gallery");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'id'			=>	$_GET["id"],
				'name'			=>	$_POST["name"],
				'price'		=>	$_POST["price"],
				'style'    => $_POST["style"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'id'=>$_GET["id"],
			'name'=>$_POST["name"],
			'price'=>$_POST["price"],
			'style'=> $_POST["style"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Art Gallery Management</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body bgcolor="blue">
		<div class="container">
			<h1 align="center"><strong><font color="#544A48">Arts</font></strong></h1><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
						<h4 class="text-info">ART ID:<?php echo $row["id"]; ?></h4>
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
						<h4 class="text-info"><?php echo $row["style"]; ?></h4>

						<input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="style" value="<?php echo $row["style"]; ?>" />


					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.buy { color: red;}
	</style>
</head>
<body bgcolor="blue">
	<div><h1 align="center">Know About Artist</h1>
<form action="showartist.php" method="post" align="center">
<strong>Art ID:</strong><input type="text" name="id" placeholder="ex:1" required=""><br>
<br>
<input type="submit" value="Show" name="buyorder">
</form>
	</div>
	<div class="buy">
  <h1 align="center">Want To Buy!</h1>
</div>
<div>
<form action="orderbuy.php" method="post" align="center">
<strong>Art ID:</strong><input type="text" name="id" placeholder="ex:1" required=""><br>
<strong>email:</strong><input type="email" name="email" placeholder="registered email" required="">
<br>
<input type="submit" value="Buy" name="buyorder">
</form>
</div>

</body>
</html>
