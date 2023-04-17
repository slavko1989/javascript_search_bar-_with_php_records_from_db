<?php
include_once("db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<section class="container">
		<form>
			<i class="fa fa-search"></i>
			<input type="text" name="" id="search-item" placeholder="Search product" onkeyup="search()">
		</form>

		<div class="product-list" id="product-list">
			<?php
				$sql = "select * from product";
				$result = mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){ ?>

			<div class="product">
				<img src="img_product/<?php echo $row['product_img']; ?>" alt="">
				<div class="p-details">
					<h2><?php echo $row['product_name']; ?></h2>
					<h3><?php echo $row['product_price']; ?></h3>
				</div>
			</div>
			<?php } } ?>
			</div>
		</div>
	</section>

<script src="script.js"></script>
</body>
</html>