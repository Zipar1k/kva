<?php
	$connect = mysqli_connect('localhost', 'root', '', 'kva_db');

	if(!$connect){
		die('ERROR CONNECT DB');
	}