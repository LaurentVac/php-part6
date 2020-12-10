<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 part 6 php</title>
</head>
<body> 
<a href=" index.php?lastname=Nemare&firstname=Jean">Allez</a>
<?php 
// creation de la condition pour trouver si les valeur existe
 if (isset($_GET['firstname']) AND isset($_GET['lastname']))   // on a le nom et le prénom
 {
     echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '!';
 }
 else   // Il manque des paramètres, on avertit le visiteur
 {
     echo "ca n'existe pas";
 }
    ?>

    
</body>
</html>