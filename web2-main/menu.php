<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.CSS">
    <link rel="stylesheet" href="css/LOG.CSS">
    <link rel="stylesheet" href="css/ABOUT.CSS">
</head>

<body>
    <div class="top-box">
        <header><b>BOXS INFO</b></header>
        <?php if (isset($_SESSION["name"]))
            echo ($_SESSION["name"]) ?>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="index.php"><u><b>Home</b></u></a></li>
            <?php if (!isset($_SESSION["name"])) { ?>
                <li><a href="LOG.php"><u><b>Log In</b></u></a></li>
                <li><a href="sign.m.php"><u><b>Sign In</b></u></a></li>
            <?php } ?>


            <?php if (isset($_SESSION["name"])) { ?>
                <li><a href="logout.php"><u><b>Log Out</b></u></a></li>
            <?php } ?>


            <li><a href="ABOUT.php"><u><b>About Us</b></u></a></li>


            <?php if (isset($_SESSION["admin"])) { ?>
                <li><a href="u1ser.sh.php"><u><b>Users</b></u></a></li>
            <?php } ?>
        </ul>
    </nav>
</body>

</html>