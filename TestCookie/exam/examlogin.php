<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Проверка</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header>
    <a href="../profile.php">Мой Профиль</a> |
    <a href="../index.php">Войти</a> |
    <a href="../Registration.php">Регистрация</a>
</header>
<?php
    if(trim($_POST['login']) == '')
        echo 'Wrong login password!<br>';
    elseif (trim($_POST['pas']) == ''){
        echo 'Wrong login password!<br>';
    }
    elseif (trim($_POST['login']) !== $_COOKIE['login']){
        echo 'Wrong login password!<br>';
    }
    elseif (trim($_POST['pas']) !== $_COOKIE['password']){
        echo 'Wrong login password!<br>';
    }
    else{
        setcookie("login",trim($_POST['login']),time()+3600);
        setcookie("password",trim($_POST['pass1']),time()+3600);
        setcookie("email",trim($_POST['email']),time()+3600);
        setcookie("date",trim($_POST['date']),time()+3600);
        setcookie("loginONOFF","ON",time()+3600);
        header('Location: ../profile.php');
        exit;
    }

    require '../blocks/footer.php';