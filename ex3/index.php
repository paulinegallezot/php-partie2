<?php
$age = 0;
$gender = 'femme';
if($age >= 18 && $gender =='homme') {
    $result = 'Vous êtes un homme est vous êtes majeur.';
}elseif ($age < 18 && $gender =='homme'){
    $result ='Vous êtes un homme est vous êtes mineur.';
}elseif ($age >= 18 && $gender =='femme'){
    $result ='Vous êtes une femme est vous êtes majeur.';
}elseif ($age < 18 && $gender =='femme'){
    $result ='Vous êtes une femme est vous êtes mineur.';
}else {
    $result ='Votre age n\'est pas valide.';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 ex 3</title>
</head>
<body>
Exercice 3 Devoir <br>
Créer deux variables age et gender. La variable gender peut prendre comme valeur : <br>

    Homme <br>
    Femme <br>


En fonction de l'âge et du genre afficher la phrase correspondante : <br>

    Vous êtes un homme et vous êtes majeur <br>
    Vous êtes un homme et vous êtes mineur <br>
    Vous êtes une femme et vous êtes majeure <br>
    Vous êtes une femme et vous êtes mineur <br>
<br>
    <?php

        echo $result;
        
    ?>
</body>
</html>