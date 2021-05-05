<?php

include "lib/php/functions.php";
include "parts/templates.php";

$_SESSION['num'] = isset($_SESSION['num']) ?
   $_SESSION['num']+1 :
   0;

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Dinnerware</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	 <img src="img/dinnerwaretop.jpg" alt="">


	<div class="container" style="margin-top: 10em;">
		<div class="card" style="margin-bottom: 7em;">

			<h2>Dinnerware</h2>
				<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Lorem Ipsum has been the industry's<br>standard dummy text ever since the 1500s, when an unknown printer took a galley of type<br>and scrambled it to make a type specimen book.</p>
		</div>
	</div>


	  <div class="container" id="product" style="margin-bottom: 10em;">

         <div class="grid gap product-list">

         <?php

         $products = MYSQLIQuery("
            SELECT * 
            FROM `products`
            ORDER BY `date_create` DESC
            LIMIT 12 
            ");

         echo array_reduce($products,'makeProductList');

         ?>
         </div>



      </div>


   <footer></footer>
</body>
</html>



