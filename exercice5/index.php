<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5 part 6 php</title>
</head>
<body> 
<a href="index.php?week=12">Allez</a>
<?php 
echo   "<br/> <br/>";
// creation de la condition pour trouver si les valeur existe
 if (isset($_GET['week']))   // on a le langage et le server alors on affiche
 {
     echo "Nous sommes à la semaine " . $_GET['week'] ;
 }
 else   // Il manque des paramètres, on avertit le visiteur
 {
     echo "Pas d'informations";
 }
    ?>

    
</body>
</html>