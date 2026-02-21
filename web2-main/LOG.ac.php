<?php
include("menu.php");
?>
<?php
$name = $_POST["name"];
$user = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$repass = $_POST["repass"];

if ($pass==$repass){$con = mysqli_connect("localhost", "root", "", "web");
$javab = mysqli_query($con, "INSERT INTO `log`(`name`, `user`, `email`,`pass`) VALUES ('$name','$user','$email','$pass')");
mysqli_close($con);
if ($javab == true) {
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?PHP
} else {
    echo ("faild");
}
}else{
    echo ("log in faild");
}

