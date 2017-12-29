<?php
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600);
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <?php
        echo 'Login : ' . $_COOKIE['login'];
        ?>
        <br>
        <?php
        echo 'Mot de passe : ' . $_COOKIE['password']
        ?>
    </body>
</html>
