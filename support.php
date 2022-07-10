<!DOCTYPE html>
<html lang="ru">
<head>
<meta name="viewport" content="width=device-width, initial-scale= 1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<title mt-5>Support</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      </a>
<h3>Support form</h3>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Enter Email"
    class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Enter your message"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Send</button>
</div>
</div>
</form>
