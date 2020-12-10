<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3 part 6 php</title>
</head>
<body> 
<a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Allez</a>
<?php 
echo   "<br/> <br/>";
// creation de la condition pour trouver si les valeur existe
 if (isset($_GET['startDate']) AND isset($_GET['endDate']))   // on a les dates alors on affiche
 {
     echo "Le projet débute le " . $_GET['startDate'] . ' et termine le ' . $_GET['endDate'];
 }
 else   // Il manque des paramètres, on avertit le visiteur
 {
     echo "Pas d'informations";
 }
    ?>

    
</body>
</html>