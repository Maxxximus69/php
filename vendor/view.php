<?php
require_once 'connect.php';
session_start();

$name_id = $_GET['id'];
$name = mysqli_query($connect, "SELECT * FROM `categories` WHERE `id` = '$name_id'");
$name = mysqli_fetch_assoc($name);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View categories</title>
</head>
<body>
    <h2>categories<?= $name['name']?></h2>
</body>
</html>