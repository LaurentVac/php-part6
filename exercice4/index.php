<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4 part 6 php</title>
</head>
<body> 
<a href="index.php?language=PHP&server=LAMP">Allez</a>
<?php 
echo   "<br/> <br/>";
// creation de la condition pour trouver si les valeur existe
 if (isset($_GET['language']) AND isset($_GET['server']))   // on a le langage et le server alors on affiche
 {
     echo "J'utilise le langage " . $_GET['language'] . ' et mon server est ' . $_GET['server'];
 }
 else   // Il manque des paramètres, on avertit le visiteur
 {
     echo "Pas d'informations";
 }
    ?>

    
</body>
</html>