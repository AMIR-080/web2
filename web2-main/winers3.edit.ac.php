<?php
$id = $_GET["id"];
include("menu.php");
?>


<?php
$name = $_POST["name"];
$firstwin = $_POST["firstwin"];
$record = $_POST["record"];
$wins = $_POST["wins"];
$country = $_POST["country"];
$company = $_POST["company"];



$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "UPDATE `heavy` SET `name`='$name',`firstwin`='$firstwin',`record`='$record',`wins`='$wins',`country`='$country',`company`='$company' WHERE id=$id ");
mysqli_close($con);
if ($javab == true) {
    ?>
    <script>
        location.replace("winers.php");
    </script>
    <?php
} else {
    echo ("edit faild");
}

?>