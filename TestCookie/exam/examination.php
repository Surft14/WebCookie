<?php
    $title = "Проверка";
    require '../blocks/header.php';
    if ($_POST['pass1'] !== $_POST['pass2']) {
        echo 'Wrong password!<br>';
    }
    elseif (trim($_POST['pass1']) == '' || trim($_POST['pass2']) == '') {
        echo 'Wrong password!<br>';
    }
    else if (trim($_POST['login']) == '') {
        echo 'Wrong login!<br>';
    }
    elseif (trim($_POST['email'] == '')) {
        echo 'Wrong email!<br>';
    }
    elseif (trim($_POST['date']) == ''){
        echo 'Wrong date!<br>';
    }
    else {
        setcookie("login",trim($_POST['login']),time()+3600);
        setcookie("password",trim($_POST['pass1']),time()+3600);
        setcookie("email",trim($_POST['email']),time()+3600);
        setcookie("date",trim($_POST['date']),time()+3600);
        setcookie("loginONOFF","ON",time()+3600);
        header('Location: ../profile.php');
        exit;
    }
    require '../blocks/footer.php';