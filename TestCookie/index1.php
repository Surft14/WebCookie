<?php
    if ($_COOKIE['loginONOFF'] == "ON"){
        header('Location: profile.php');
        exit;
    }
    else{
        header('Location: index.php');
        exit;
    }