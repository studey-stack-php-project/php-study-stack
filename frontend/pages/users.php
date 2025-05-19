<?php
session_start();


if (isset($_SESSION["name"])) {
    echo "hello " . $_SESSION["name"];
} else {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../include/head.php" ?>
    <title>users</title>
</head>

<body>

</body>

</html>