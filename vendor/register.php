<?php
    session_start();
if ($_SESSION['user']){
    header('Location: /profile.php');
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
<form action="auth.php" method="post">
 <label>Login</label>
 <input type="text" placeholder="Enter login" name="login">
 <label>Password</label>
 <input type="password" placeholder="Enter password" name="password">
 <label>Password confirm</label>
 <input type="password" placeholder="Enter your password again" name="password_confirm">
 <button type="submit" >Log in</button>
 <p> 
    You already have a account? - <a href="/"> Log in</a>!
 </p>
</form>
</body>
</html>