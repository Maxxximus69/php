<?php
require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `categories` WHERE `name`.`id` = '$id'");

header('Location: /');