<?php

include "lib/php/functions.php";
include "parts/templates.php";

$cart = MYSQLIQuery("
   SELECT *
   FROM `products`
   WHERE `id` IN (5,9,13)
");

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>


		<div class="container">
			<div class="card soft">
				<h2>Confirm Cart</h2>

		        <?php

		        echo array_reduce($cart,'makeCartList');

		        ?>

				<div>
					<a class="filled" href="checkout.php">Checkout</a>
				</div>
			</div>
		</div>







		<div class="container" style="margin-top: 10em; margin-bottom: 20em;">
			<div class="card">
				<div class="grid gap large">
				  	<div class="col-xs-12 col-md-4">

							<div class="product-image">
		                     <img src="https://via.placeholder.com/200?text=Product" alt="">
		                  	</div>
		            </div>

		            <div class="col-xs-12 col-md-4">
		                  	<h3>Product Name</h3>
					        <h2>Product Name</h2>
							<p>One of three plates available from our original Coupe line, designed in the 1940s. The clean, rimless dinner plate design is our most versatile, pairing well with any of our other lines and offered in the widest variety of glazes.</p>
					</div>

		    		<div class="col-xs-12 col-md-4"></div>  
				</div> 
			</div>
		</div>


</body>
</html>