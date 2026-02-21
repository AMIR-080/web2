<?php
$id = $_GET["id"];
include("menu.php");

$name = $_POST["name"];
$user = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$repass = $_POST["repass"];


if ($pass==$repass){
$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "UPDATE `log` SET `name`='$name',`user`='$user',`email`='$email',`pass`='$pass',`repass`='$repass' WHERE id=$id ");
mysqli_close($con);
if ($javab == true) {
    ?>
    <script>
        location.replace("u1ser.sh.php");
    </script>
    <?php
} else {
    echo ("edit faild");
}
}else {
    echo ("log in faild");
}
?>