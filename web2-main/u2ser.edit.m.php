<?php
include("menu.php");
?>

<?php if (!isset($_SESSION["name"])) { ?>
    <script>
        location.replace("index.php");
    </script>
<?php } ?>

<?php
$id = $_GET["id"];
$LINK = mysqli_connect("localhost", "root", "", "web");
$result = mysqli_query($LINK, "SELECT * FROM log where id=$id");
mysqli_close($LINK);

$row = mysqli_fetch_array($result);
?>
<form action="u3ser.edit.ac.php?id=<?php echo ($id); ?> " method="post" >
    <b>ENTER YOUR NAME</b>
    <input type="text" name="name" value="<?php echo ($row["name"]); ?>" placeholder="NAME">

    <b>ENTER YOUR USER NAME</b>
    <input type="text" name="user" value="<?php echo ($row["user"]); ?>" placeholder="USER NAME">

    <b>ENTER YOUR EMAIL</b>
    <input type="text" name="email" value="<?php echo ($row["email"]); ?>" placeholder="EMAIL">

    <b>ENTER YOUR PASSWORD</b>
    <input type="password" name="pass" value="<?php echo ($row["pass"]); ?>" placeholder="PASSWORD">

    <b>REPEAT YOUR PASSWORD</b>
    <input type="password" name="repass" placeholder="REPEAT PASSWORD">

    <b>ENTER</b>
    <input type="submit" value="save">
</form>