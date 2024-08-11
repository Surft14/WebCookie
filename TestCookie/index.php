<?php
    $title = "Войти";
    require'blocks/header.php';
?>
<div class="container mt-2">
<h1>Войдите</h1>
    <form action="exam/examlogin.php" method="post">
        <input type="text" name="login" placeholder="Введите login"><br>
        <br><input type="password" name="pas" placeholder="Введите пароль"><br>
        <br><input type="submit" value="Войти" class="btn btn-success"><br>
    </form>
    <form action="Registration.php" method="post">
        <br><input type="submit" value="Зарегестрироватся" class="btn btn-success"><br>
    </form>
</div>
<?php
    print_r($_COOKIE);
    require'blocks/footer.php';
?>

