<?php
$isOk = true;
if ($isOk){
    $result= 'C\'est ok !!!';
}else{
    $result= 'C\'est pas ok !!';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 Ex 8</title>
</head>
<body>

Exercice 8 Devoir <br>
Traduire ce code avec des if et des else : <br>

    <!-- <?php
      echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?>  -->

     <br> <br>

    <?php

    echo $result;

    ?>


    
</body>
</html>