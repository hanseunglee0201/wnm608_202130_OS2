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
     	<!-- <div class="grid gap"> -->
     		<!-- <div class="col-xs-12 col-md-6"> -->
     			<div class="card" style="margin-bottom: 3em;">
     				<div class="product-title" style="font-size: 2.1em; font-weight: 300;">My Cart</div>

            <!-- <div class="grid gap" style="padding-bottom: 1em; border-bottom: solid 1px var(--color-neutral-medium);">
               <div class="col-xs-12 col-md-2">
                  <div class="product-info">ITEMS</div>
               </div>

               <div class="col-xs-12 col-md-4">
                  <div class="product-info">NAME</div>
               </div>

               <div class="col-xs-12 col-md-2">
                  <div class="product-info">QUANTITY</div>
               </div>

               <div class="col-xs-12 col-md-3">
                  <div class="product-info">PRICE</div>
               </div>
            </div> -->


  		         <?php

  		        if(!count($cart)) {
  		        	echo "<div class='card-section'>No Items In Cart Yet.</div>";
  		        }
  		        else {
  		        	echo array_reduce($cart,'makeCartList');
  		        }

  		         ?>
       	 	</div>
    		<!-- </div> -->
      <!-- </div> -->

    <div class="grid gap">
   		<div class="col-xs-12 col-md-6">
			<div class="card" style="background-color: var(--color-light);">
		     	<?= cartTotals() ?>
		            <a class="button1 filled" href="product_checkout.php" style="width: 85%; text-align: center; margin-top: 1em;">Checkout</a>
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