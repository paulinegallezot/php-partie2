<?php
$age = 22;
if($age >= 18){
    $result = 'Vous êtes majeur';
}else{
    $result = 'Vous êtes mineur';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 Ex1 </title>
</head>
<body>
Exercice 1 Devoir
Créer une variable age et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher "Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
<br>
    <?php
            echo $result;
    ?>


</body>
</html>