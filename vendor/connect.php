<?php

$connect = mysqli_connect('localhost', 'root', 'root','db');

if (!$connect ) {
    die('Error connect to DB');
}