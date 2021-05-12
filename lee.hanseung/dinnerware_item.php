<?php

include "lib/php/functions.php";
include "data/api.php";

$product = makeStatement("product_by_id")[0];

$thumbs = explode(",", $product->image_other);

$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='$o'>";
});



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Item</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>





<div class="container" style="margin-top: 10em; margin-bottom: 20em;">
      <div class="grid gap product-display" style="margin-bottom: 10em;">
         <div class="col-xs-12 col-md-6">
               <div class="image-main">
                  <img src="<?= $product->image_thumb ?>" />
               </div>
               <div class="image-thumbs"><?= $thumb_elements ?></div>
         </div>

         <div class="col-xs-12 col-md-1"></div>

         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" action="product_actions.php?crud=add-to-cart" method="post">
               <input type="hidden" name="id" value="<?= $product->id ?>">
               <div class="card-section">
                    <h3><?= $product->category ?></h3>
                  <div class="product-title"><?= $product->name ?></div>

            <div class="product-description" style="width: 100%; margin-left: 0;">
                     <p><?= $product->description ?></p>
               </div>

               <div class="card" style="margin-top: 0em; padding: 0.5em 0em 0em 0em; margin-bottom: 1em;">
                 <div class="product-info">Price</div>
                  <div class="product-price">&dollar;<?= $product->price ?></div>
               </div>
               <div class="card-section">
                  <div class="card" style="margin-top: 0em; padding: 0.5em 0em 0em 0em; margin-bottom: 1em;">
                  <div class="product-info">Quantity</div>
                  <div class="form-select">

                     <select name="amount">
                        <!-- option[value='$']*10>{$} -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
                 </div>
            </div>

               <div class="card-section">
                  <button type="submit" class="filled" style="width: 100%; margin-left: 0;">Add To Cart</button>
               </div>
            </div>
         </form>
      </div>
   </div>








      <div class="container" style="margin-bottom: 20em;">
         <hr>
         <div class="container">
         <h1>Similar Products</h1>
         <h4>Tempore cumque ad ullam id totam explicabo voluptatibus illum inventore, dolores<br>laudantium ea repellat ex, ratione atque.</h4>
         </div>
         <div class="grid gap">
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
   </div>

   <footer></footer>

</body>
</html>
