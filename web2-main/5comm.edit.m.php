<?php
include("menu.php");
$id = $_GET["id"];
$LINK = mysqli_connect("localhost", "root", "", "web");
$result = mysqli_query($LINK, "SELECT * FROM comment where id=$id");
mysqli_close($LINK);

$row = mysqli_fetch_array($result);
?>
<form action="6comm.edit.ac.php?id=<?php echo ($id); ?> " method="post" >
    <input type="text" name="comm" value="<?php echo ($row["comm"]); ?>" placeholder="COMMENT">
    <input type="submit" value="save">
</form>