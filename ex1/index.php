<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        echo 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'];
        ?>
        <br>
        <?php
        echo 'Adresse ip : ' . $_SERVER['REMOTE_ADDR'];
        ?>
        <br>
        <?php
        echo 'Nom du serveur : ' . $_SERVER['SERVER_NAME'];
        ?>
    </body>
</html>
