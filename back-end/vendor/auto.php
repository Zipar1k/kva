<?php
	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$passwd = md5($_POST['passwd']);

	$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `passwd` = '$passwd'");
	if(mysqli_num_rows($result) > 0){
		$user = mysqli_fetch_assoc($result);

		$_SESSION['user'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"login" => $user['login']
		];
		header('Location: ../carta.php');
	}
	else{
		$_SESSION['msg'] = 'Пользователь не найден';
		header('Location: ../index.php');
	}

mysqli_close();
?>