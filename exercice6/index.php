<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6 part 6 php</title>
</head>
<body> 
<a href="index.php?building=12&room=101">Allez</a>
<?php 
echo   "<br/> <br/>";
// creation de la condition pour trouver si les valeur existe
 if (isset($_GET['building']) AND isset($_GET['room']))   // on a le langage et le server alors on affiche
 {
     echo "Vincent paye sa tournée au bâtiment " . $_GET['building'] . ' chambre ' . $_GET['room'];
 }
 else   // Il manque des paramètres, on avertit le visiteur
 {
     echo "Pas d'informations";
 }
    ?>

    
</body>
</html>