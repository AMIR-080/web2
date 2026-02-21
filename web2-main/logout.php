<?php
include("menu.php");
unset($_SESSION["name"]);
unset($_SESSION["admin"]);
?>
<script>
    location.replace("index.php");
</script>