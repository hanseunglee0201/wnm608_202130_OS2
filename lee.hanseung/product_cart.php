<?php

include "lib/php/functions.php";
include "parts/templates.php";

// resetCart();
// pretty_dump(getCart());

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
   	<div class="grid gap">
   		<div class="col-xs-12 col-md-6">
   			<div class="card">
   				<div class="product-title" style="font-size: 2.1em; font-weight: 300;">My Cart</div>
		         <?php

		        if(!count($cart)) {
		        	echo "<div class='card-section'>No Items In Cart Yet.</div>";
		        }
		        else {
		        	echo array_reduce($cart,'makeCartList');
		        }

		         ?>
     	 	</div>
  		</div>

   		<div class="col-xs-12 col-md-6">
			<div class="card" style="background-color: var(--color-light);">
		     	<?= cartTotals() ?>
		            <a class="button1 filled" href="product_checkout.php" style="width: 85%; text-align: center; margin-top: 1em;">Checkout</a>
     	 	</div>
   		</div>
   	</div>




   </div>
</body>
</html>