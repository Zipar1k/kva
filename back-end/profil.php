<?php
	session_start();
	if (!$_SESSION['user']){
		header('Location: index.php');
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>profil</title>
<link rel="stylesheet" type="text/css" href="assets/css/lp.css"/>
</head>
<body>
<header>
<div class="hed">
<h1 id="NMK"><a href="carta.php" style="text-decoration: none; color: #D6E78F;">НЕМОЙКАБИНЕТ</a></h1>
</div>
</header>

<a href="vendor/logout.php">Выйти</a>

</body>
</html>