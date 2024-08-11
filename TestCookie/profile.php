<?php
    $title = "Профиль";
    require 'blocks/header.php';
?>
<h1>Ваш профиль</h1>

<?php
echo $_COOKIE['login'].'<br>';
echo $_COOKIE['password'].'<br>';
echo $_COOKIE['email'].'<br>';
echo $_COOKIE['date'].'<br>';
echo $_COOKIE['loginONOFF'].'<br>';
print_r($_COOKIE);
    require 'blocks/footer.php';
?>
