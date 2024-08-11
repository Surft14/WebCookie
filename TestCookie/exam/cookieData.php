<?php
    setcookie("login",trim($_POST['login']),time()+3600);
    setcookie("password",trim($_POST['pass1']),time()+3600);
    setcookie("email",trim($_POST['email']),time()+3600);
    setcookie("date",trim($_POST['date']),time()+3600);
    setcookie("loginONOFF","ON",time()+3600);