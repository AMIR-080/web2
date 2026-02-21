<?php
include("menu.php");
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
        body {
            color: rgba(234, 255, 0, 1);
        }
    </style>
</body>

</html>
<?php
$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "SELECT * FROM `comment`");
mysqli_close($con);

$row = mysqli_fetch_array($javab);
while ($row) {
    ?>

    <a href="4comm.del.php?id= <?php echo ($row["id"]); ?> ">delete</a>
    <a href="5comm.edit.m.php?id= <?php echo ($row["id"]); ?> ">edit</a>

    <?php
    echo ($row["comm"] . " " . "<br>");
    $row = mysqli_fetch_array($javab);
    echo ("<hr>");
}