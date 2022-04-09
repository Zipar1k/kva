<?php
	session_start();
	//require_once 'connect.php';

	$login = $_POST['login'];

	//$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `passwd` = '$passwd'");

	header('Location: ../profil.php');


mysqli_close();
?>