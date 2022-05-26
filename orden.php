<!DOCTYPE html>
<html lang="en">

<body>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Ordenes</title>

		<link rel="stylesheet" href="css/estilos.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/script.js"></script>
	</head>



	<div class="wrap">
		<h1> Administrar Ordenes </h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="platillos.php" class="category_item" category="platillos">Platillos</a>
				<a href="bebidas.php" class="category_item" category="bebidas">Bebidas</a>
				<a href="postres.php" class="category_item" category="postres">Postres</a>

			</div>
			<section class="products-list">
				<div class="product-item" category="platillos">
					<img src="img/plat1.jpg" alt="" width="150px">
					<a href="platillos.php">Platillos</a>
				</div>
				<div class="product-item" category="bebidas">
					<img src="img/beb1.jpg" alt="beb1" width="150px">
					<a href="bebidas.php">Bebidas</a>
				</div>
				<div class="product-item" category="postres">
					<img src="img/post1.jpg" alt="post1" width="150px">
					<a href="postres.php">Postres</a>
				</div>
			</section>
		</div>
	</div>

</body>

</html>