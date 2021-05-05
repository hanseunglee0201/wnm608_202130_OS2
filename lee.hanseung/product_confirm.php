<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>

	<?php include "parts/meta.php" ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php include "parts/navbar.php" ?>

   <div class="container">
      <div class="card soft">
         <h2>Thank you for your purchase!</h2>

         <div>You bought these things</div>
         <div><a href="productlist.php">Try out these things</a></div>
      </div>
   </div>

</body>
</html>