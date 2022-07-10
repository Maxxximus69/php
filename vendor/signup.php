<?php
    session_start();     
    require_once 'connect.php';


    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm){
    
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");
        $_SESSION['message'] = 'Successfuly';
        header('Location: /auth.php');
    } else {
        $_SESSION['message'] = 'Passwords do not match';
        header('Location:../register.php');
        }
?>