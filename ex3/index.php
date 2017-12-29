<?php
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600);
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <h1>Mon formulaire</h1>
        <form action="../ex4/index.php" method="POST">
            <label>Login : </label><input type="text" name="login" />
            <label>Mot de passe : </label><input type="password" name="password" />
            <input type="submit" value="Valider" />
        </form>
    </body>
</html>