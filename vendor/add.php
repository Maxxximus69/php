<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$parentid = $_POST['parent_id'];

mysqli_query($connect,"INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES (NULL, '$parentid', '$name')");

header('Location: /vendor/wood.php');