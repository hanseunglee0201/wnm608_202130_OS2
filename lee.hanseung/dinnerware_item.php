<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Item</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>


	<!-- <div class="container"> -->
		<!-- <div class="card soft"> -->
			<!-- <h2>Dinnerware Item</h2> -->

			<!-- <div>This is Dinnerware item: #<?= $_GET['id'] ?></div> -->
		<!-- </div> -->
	<!-- </div> -->

		<div class="container" style="margin-top: 10em; margin-bottom: 20em;">
			<div class="grid gap">
			  	<div class="col-xs-12 col-md-6">
					<div class="product-image">
                     <img src="https://via.placeholder.com/200?text=Product" alt="">
                  	</div>
	            </div>

	    		<div class="col-xs-12 col-md-1"></div> 

				<div class="col-xs-12 col-md-5">
			        <div class="container" style="margin-bottom: 3em;">    
			            <h3>Dinnerware</h3>
			         	<h2>Product Name</h2>
						<p>One of three plates available from our original Coupe line, designed in the 1940s. The clean, rimless dinner plate design is our most versatile, pairing well with any of our other lines and offered in the widest variety of glazes.</p>
					</div>

	                 	<figcaption class="product-caption">
	                     	<div class="product-info">Size </div>
	                     	<div class="product-detail">10.75" dia.</div>
	                  	</figcaption>

						<div class="card" style="margin-top: 0em; padding: 0.5em 0em 0em 0em; margin-bottom: 1em;">
							<div class="product-info">Color</div>
							<div class="product-detail">10.75" dia.</div>
						</div>
						<div class="card" style="margin-top: 0em; padding: 0.5em 0em 0em 0em; margin-bottom: 1em;">
							<div class="product-info">Quantity</div>
							<div class="product-detail">Buttons will be made later.</div>
						</div>

							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<a class="button" style="width: 300px;">Add to Favorites</a>
								</div>

								<div class="col-xs-12 col-md-6">
									<a class="button" href="product_added_to_cart.php" style="width: 300px;">Add to Cart</a>
								</div>

							</div>
				</div> 
			</div>
		</div>

		<div class="container" style="margin-bottom: 20em;">
			<hr>
			<div class="container">
			<h1>Similar Products</h1>
			<h4>Tempore cumque ad ullam id totam explicabo voluptatibus illum inventore, dolores<br>laudantium ea repellat ex, ratione atque.</h4>
			</div>
			<div class="grid gap large">
					<div class="col-xs-12 col-md-4">
					<div class="product-image">
                     	<img src="https://via.placeholder.com/600?text=Product" alt="">
                  </div>
					</div>

					<div class="col-xs-12 col-md-4">
					<div class="product-image">
                     	<img src="https://via.placeholder.com/600?text=Product" alt="">
                  </div>
					</div>

					<div class="col-xs-12 col-md-4">
					<div class="product-image">
                     	<img src="https://via.placeholder.com/600?text=Product" alt="">
                  	</div>
					</div>
			</div>

		</div>
	</div>

	<footer></footer>

</body>
</html>