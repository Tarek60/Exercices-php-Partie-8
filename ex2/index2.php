<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        echo 'Nom : ' . $_SESSION['nom'];
        ?>
        <br>
        <?php
        echo 'Prenom : ' . $_SESSION['prenom'];
        ?>
        <br>
        <?php
        echo 'Age : ' . $_SESSION['age'];
        ?>
    </body>
</html>


