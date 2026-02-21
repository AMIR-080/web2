<?php
include("menu.php")
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
            body{
                color: rgba(234, 255, 0, 1);
            }
        </style>
    </body>
    </html>





<p><b>WELCOME</b></p>

<form action="LOG.ac.php" method="post" >
    <b>ENTER YOUR NAME</b>
    <input type="text" name="name" placeholder="NAME">
    <b>ENTER YOUR USER NAME</b>
    <input type="text" name="user" placeholder="USER NAME">
    <b>ENTER YOUR EMAIL</b>
    <input type="text" name="email" placeholder="EMAIL">
    <b>ENTER YOUR PASSWORD</b>
    <input type="password" name="pass" placeholder="PASSWORD">
    <b>REPEAT YOUR PASSWORD</b>
    <input type="password" name="repass" placeholder="REPEAT PASSWORD">
    <b>ENTER</b>
    <input type="submit" value="save">
</form>