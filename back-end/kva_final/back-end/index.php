<?php
	session_start();
	if ($_SESSION['user']){
		header('Location: carta.php');
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>auth</title>
<link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
</head>
<body>
	<!-- авторизация -->
<div class="auth_con">
	<form action="vendor/auto.php" method="post">
		<label><h1 id="NMK">НЕМОЙКАБИНЕТ</h1></label>
		 <input type="text" name="login" placeholder="Введите почту или номер телефона">
		 <input type="passwd" name="passwd" placeholder="Введите пароль">
		 <button type="submit">Войти</button>

<?php
		 if ($_SESSION['msg']){
		 	echo '<p class="msg">' . $_SESSION['msg'] . '</p>';
		 }

		 	unset($_SESSION['msg']);
		 ?>

	</form>
</div>
</body>
</html>