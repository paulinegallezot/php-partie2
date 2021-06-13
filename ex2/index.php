<?php
$isEasy = true;
if($isEasy){
    $result= 'C\'est facile avec Thierry';
}else{
    $result= 'C\'est difficle';
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 ex 2</title>
</head>
<body>
Exercice 2 Devoir <br>
Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  <br>
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. <br>

<br>
    <?php

        echo $result;

    ?>

<!-- version ternaire -->

    <?php

        echo $isEasy ? 'C\'est facile avec Thierry' : 'C\'est difficile';
        // $isEasy==true
        echo !$isEasy ? 'C\'est facile avec Thierry' : 'C\'est difficile';
        // $isEasy==false
    ?>

</body>
</html>