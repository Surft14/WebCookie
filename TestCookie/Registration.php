<?php
    $title = "Регистрация";
    require 'blocks/header.php';
?>
    <div class="container mt-2">
        <h1>Регистрация</h1>
        <form action="exam/examination.php" method="post">
            <input name="login" type="text" placeholder="Придумайте ник"><br>
            <br><input type="email" name="email" placeholder="Введите почту"><br>
            <br><input type="password" name="pass1" placeholder="Придумайте пароль">
            <br><input type="password" name="pass2" placeholder="Потвердите пароль"><br>
            <br><input type="date" name="date" placeholder="Дата"><br>
            <br><input type="submit" value="Регистрация" class="btn btn-success"><br>
        </form>
    </div>
<?php
print_r($_COOKIE);
    require 'blocks/footer.php';
?>
