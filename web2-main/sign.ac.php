<?php
include("menu.php");
?>
<?php
$user = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "SELECT * FROM `log` WHERE user='$user' and email='$email' and pass='$pass'");
mysqli_close($con);
$row = mysqli_fetch_array($javab);
if ($row) {
    $_SESSION["name"] = $row["name"];
    if ($row["admin"] == true)
        $_SESSION["admin"] = true;
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?PHP
} else {
    echo ("ONE FIELD IS INCORRECT");
}
