<?php
include("menu.php");
?>
<?php
$comm = $_POST["com"];


$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "INSERT INTO `comment`(`comm`) VALUES ('$comm')");
mysqli_close($con);
if ($javab == true) {
    ?>
    <script>
        location.replace("3comm.sh.php");
    </script>
    <?PHP
} else {
    echo ("faild");
}
?>
