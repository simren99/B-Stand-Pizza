<?php
$con=mysqli_connect("localhost","root","","ecom");
if(isset($_POST['go'])) {
	$product_id = $_POST['product_id'];
	$product_cat = $_POST['product_cat'];
	$product_title = $_POST['product_title'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$product_image = $_POST['product_image'];
	$product_keywords = $_POST['product_keywords'];
	$sql=mysqli_query($con,"INSERT INTO products(product_id,product_cat, product_title, product_price,product_desc,product_image,product_keywords)VALUES('$product_id','$product_cat', '$product_title', '$product_price','$product_desc','$product_image','$product_keywords')");
	if($sql){
	echo "Data Submit Successful";
}
else{
	echo "Data Submit Error!!";
}

}
$con=null;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">B-STAND PIZZA</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-th"></span>Product</a></li>
				<li><a href="index.php"><span class=""></span>Logout</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Add to Menu </div>
					<div class="panel-body">
					
					<form method="POST" action="adminopt.php">
						<div class="row">
							<div class="col-md-6">
								<label for="product_id">Product no</label>
								<input type="text" id="product_id" name="product_id" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="product_cat">Product type </label>
								<input type="text" id="product_cat" name="product_cat" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_title">Product Name</label>
								<input type="text" id="product_title" name="product_title" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_price">Product Price</label>
								<input type="text" id="product_price" name="product_price" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_desc">Product Description</label>
								<input type="text" id="product_desc" name="product_desc"  class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_image">Product Image</label>
								<input type="text" id="product_image" name="product_image" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="product_keywords">Product Keyword</label>
								<input type="text" id="product_keywords" name="product_keywords" class="form-control">
							</div>
						</div>
						
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;"  value="Submit" name="go" type="submit" class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>