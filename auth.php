<?php
session_start();

if ($_SESSION['user']){
    header('Location: /vendor/wood.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <link rel="stylesheet" href="css/main.css"
</head>
<body>
    <!-- Auth form -->
<form action="vendor/signin.php" method="post">
 <label>Login</label>
 <input type="text" placeholder="Enter login" name="login">
 <label>Password</label>
 <input type="password" placeholder="Enter password" name="password">
 <button type="submit" >Log in</button>
 <p> 
    You dont have a account? - <a href="/vendor/register.php"> Register</a>!
 </p>
</form>
</body>