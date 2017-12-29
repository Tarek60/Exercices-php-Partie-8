<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On créer les variables de session dans $_SESSION
$_SESSION['nom'] = 'Elouatar';
$_SESSION['prenom'] = 'Tarek';
$_SESSION['age'] = 18;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <a href="index2.php">Cliquez pour accéder à la 2ème page<a/>
    </body>
</html>


