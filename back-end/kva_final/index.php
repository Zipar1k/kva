<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: login.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> KvA - этажи </title>
    <link rel="icon" type="image/x-icon" href="img/icon.svg">
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="css/base.css">

    <link type="text/css" rel="stylesheet" href="css/index.css">
    <script>

        function changeOnFloor1() {
            document.getElementById("picture").setAttribute("src", "img/floor_1.png");

            document.getElementById("1").style.display = "inline-block";
            document.getElementById("2").style.display = "none";
            document.getElementById("3").style.display = "none";
        }
        function changeOnFloor2() {
            document.getElementById("picture").setAttribute("src", "img/floor_2.png");

            document.getElementById("2").style.display = "inline-block";
            document.getElementById("1").style.display = "none";
            document.getElementById("3").style.display = "none";
        }
        function changeOnFloor3() {
            document.getElementById("picture").setAttribute("src", "img/floor_3.png");

            document.getElementById("3").style.display = "inline-block";
            document.getElementById("2").style.display = "none";
            document.getElementById("1").style.display = "none";
        }
    </script>
</head>
<body>

<header>
    <p>НЕМОЙКАБИНЕТ</p>
    <div class="flying-circle">?</div>
    <a href="/account.php"><img class="avatar" src="img/avatar.png" alt="Ava"></a>
   <img class="floating-frog hide-on-med-and-down" src="img/floating_frog.png" alt="Float frog">
</header>

<main>
    <img id="picture" class="hide-on-med-and-down" src="img/floor_1.png" alt="Floor"/><br/><br />
    <div class="floors">
        <button onclick="changeOnFloor1()">1 этаж</button>
        <button onclick="changeOnFloor2()">2 этаж</button>
        <button onclick="changeOnFloor3()">3 этаж</button> <br /><br />
    </div>
    <div class="cabinets" id="1">
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn disabled">103</button>
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn red">101</button>
        <button class="btn red">101</button>
        <button class="btn red">101</button>
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn green">100</button>
        <button class="btn red">101</button>
        <button class="btn red">101</button>
        <button class="btn red">101</button>
        <button class="btn red">101</button>
    </div>
    <div class="cabinets" id="2" style="display: none;">
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn disabled">203</button>
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn red">201</button>
        <button class="btn red">201</button>
        <button class="btn red">201</button>
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn green">200</button>
        <button class="btn red">201</button>
        <button class="btn red">201</button>
        <button class="btn red">201</button>
        <button class="btn red">201</button>
    </div>
    <div class="cabinets" id="3" style="display: none;">
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn disabled">303</button>
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn red">301</button>
        <button class="btn red">301</button>
        <button class="btn red">301</button>
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn green">300</button>
        <button class="btn red">301</button>
        <button class="btn red">301</button>
        <button class="btn red">301</button>
        <button class="btn red">301</button>
    </div>

</main>

<footer>
    <hr noshade size="7">
    <div>© 2022</div>
</footer>

</body>
</html>
