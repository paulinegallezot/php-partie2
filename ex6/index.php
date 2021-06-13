<?php
$age =10;
if ($age >= 18){
    $result= "Tu es majeur.";
}else{
    $result= "Tu n'es pas majeur.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 Ex 6</title>
</head>
<body>
Exercice 6 Devoir <br>
Traduire ce code avec des if et des else :  <br>

    <!-- <?php
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?> -->
    
     <br> <br>

    <?php

        echo $result;

    ?>


    
</body>
</html>