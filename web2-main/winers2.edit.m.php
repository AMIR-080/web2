<?php
include("menu.php")
?>
<?php if (!isset($_SESSION["name"])) { ?>
    <script>
        location.replace("index.php");
    </script>
<?php } ?>



<?php
$id = $_GET["id"];
$LINK = mysqli_connect("localhost", "root", "", "web");
$result = mysqli_query($LINK, "SELECT `id`, `name`, `firstwin`, `record`, `wins`, `country`, `company` FROM `heavy` ");
mysqli_close($LINK);

$row = mysqli_fetch_array($result);
?>
<form action="winers3.edit.ac.php?id=<?php echo ($id); ?> " method="post">
    <input type="text" name="name" value="<?php echo ($row["name"]); ?>" placeholder="NAME">
    <input type="text" name="firstwin" value="<?php echo ($row["firstwin"]); ?>" placeholder="FIRSTWIN">
    <input type="text" name="record" value="<?php echo ($row["record"]); ?>" placeholder="RECORD">
    <input type="text" name="wins" value="<?php echo ($row["wins"]); ?>" placeholder="WINS">
    <input type="text" name="country" value="<?php echo ($row["country"]); ?>" placeholder="COUNTRY">
    <input type="text" name="company" value="<?php echo ($row["company"]); ?>" placeholder="COMPANY">



    
    <input type="submit" value="save">
    
</form>


