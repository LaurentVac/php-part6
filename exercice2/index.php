<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2 part 6 php</title>
</head>
<body> 
<a href=" index.php?lastname=Nemare&firstname=Jean&age=28">Allez</a>
<?php 
echo   "<br/>";
// creation de la condition pour trouver si les valeur existe
 if (isset($_GET['age']))   // on a le nom et le prénom
 {
     echo "Bonjour j'ai " . $_GET['age'] . ' ans !';
 }
 else   // Il manque des paramètres, on avertit le visiteur
 {
     echo "Age non trouvé";
 }
    ?>

    
</body>
</html>