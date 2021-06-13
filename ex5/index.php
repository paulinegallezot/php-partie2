<?php
$gender = 'femme';
if ($gender != 'homme'){
    $result= 'C\'est une developpeuse.';
}else{
    $result= 'C\'est un developpeur.';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 Ex 5</title>
</head>
<body>
Exercice 5 Devoir <br>
Traduire ce code avec des if et des else : <br> <br>

<!-- <?php
echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?> -->

Le genre est different de homme c'est une developpeuse sinon c'est un developpeur. <br> <br>

    <?php

    echo $result;

    ?>


    
</body>
</html>