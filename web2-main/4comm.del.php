<?php
include("menu.php");
$id=$_GET["id"];
$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "DELETE FROM `comment` WHERE id=$id");
mysqli_close($con);
if ($javab == true) {
    ?>
    <script>
        location.replace("3comm.sh.php");
    </script>
    <?php
} else {
    echo ("delete faild");
}
?>