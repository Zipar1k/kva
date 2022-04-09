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
	<title>carta</title>
<link rel="stylesheet" type="text/css" href="assets/css/lp.css"/>
</head>
<body>
	<div class="cont">

		<div class="block">
		    <img src="/img/plan3.png"/>
		</div>
		<div class="menu">

			<div class="prof">
				<h1 id="NMK">НЕМОЙКАБИНЕТ</h1>
				<a href="/profil.php" class="circle-image"><img src="/img/123456.png" /></a>
			</div>

			<div class="choice">
				<div class="but">

					<a class="button" href="bron.php">301</a>
					<a class="button" href="bron.php">302</a>
					<a class="button" href="bron.php">303</a>
					<a class="button" href="bron.php">304</a>
					<a class="button" href="bron.php">305</a>
					<a class="button" href="bron.php">306</a>
					<br><br>
					<a class="button" href="bron.php">307</a>
					<a class="button" href="bron.php">308</a>
					<a class="button" href="bron.php">308A</a>
					<a class="button" href="bron.php">309</a>
					<a class="button" href="bron.php">310</a>
					<a class="button" href="bron.php">311</a>
					<br><br>
					<a class="button" href="bron.php">312</a>
					<a class="button" href="bron.php">313</a>
					<a class="button" href="bron.php">314</a>
					<a class="button" href="bron.php">315</a>
					<a class="button" href="bron.php">316</a>
					<a class="button" href="bron.php">317</a>
					<br><br>
					<a class="button" href="bron.php">318</a>
					<a class="button" href="bron.php">319</a>
					<a class="button" href="bron.php">320</a>
					<a class="button" href="bron.php">321</a>
					<a class="button" href="bron.php">322</a>
					<a class="button" href="bron.php">323</a>
					<br><br>
					<a class="button" href="bron.php">324</a>
					<a class="button" href="bron.php">324A</a>
					<a class="button" href="bron.php">325</a>
					<a class="button" href="bron.php">326</a>
					<a class="button" href="bron.php">327</a>
					<a class="button" href="bron.php">328</a>
					<br><br>
					<a class="button" href="bron.php">329</a>
					<a class="button" href="bron.php">330</a>
					<a class="button" href="bron.php">331</a>
					<a class="button" href="bron.php">332</a>
					</div>
			</div>
			<div class="loug">
			<a href="vendor/logout.php"><p class="l">Выйти</p></a>
			</div>
		</div>

	</div>

</body>
</html>