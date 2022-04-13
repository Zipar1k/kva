<?php
    session_start();
    if ($_SESSION['user']){
        header('Location: index.php');
    }
    ?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title> KvA - вход </title>
    <link rel="icon" type="image/x-icon" href="img/icon.svg">
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="css/base.css">

    <link type="text/css" rel="stylesheet" href="css/login.css">

</head>
<body>
<div>
    <form action="vendor/auto.php" method="post" class="kva-login">
        <div>
            <p>НЕМОЙКАБИНЕТ</p>
            <input class="kva-input" name="login" placeholder="  Логин"/> <br />
            <input class="kva-input" name="passwd" placeholder="  Пароль"/>
            <input class="kva-submit" type="submit" value="Войти">
        </div>
    </form>
</div>
</body>
</html>