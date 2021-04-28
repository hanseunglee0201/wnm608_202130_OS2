<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Kitchen Item</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>


	<div class="container">
		<div class="card soft">
			<h2>Kitchen Item</h2>

			<div>This is Kitchen item: #<?= $_GET['id'] ?></div>
		</div>
	</div>
</body>
</html>