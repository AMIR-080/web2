<?php
$id = $_GET["id"];
include("menu.php");
$comm = $_POST["comm"];



$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "UPDATE `comment` SET `comm`='$comm'  WHERE id=$id ");
mysqli_close($con);
if ($javab == true) {
    ?>
    <script>
        location.replace("3comm.sh.php");
    </script>
    <?php
} else {
    echo ("edit faild");
}
?>