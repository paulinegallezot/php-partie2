<?php
//$result= null;
$magnitude = 0;
switch ($magnitude) {
    case 1:
        $result= 'Micro-séisme impossible à ressentir.';
        break;
    case 2:
        $result= 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
        break;
    case 3:
         $result= 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. ';
        break;
    case 4:
        $result= 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
        break;
    case 5:
        $result= 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
        break;
    case 6:
        $result= 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre. ';
        break;
    case 7:
        $result= 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. ';
        break;
    case 8:
        $result= 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
        break;
    case 9:
        $result= 'Séisme capable de tout détruire sur une très vaste zone. ';
        break;
    default :
        $result= 'Mauvaise valeur saisie';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 Ex 4</title>
</head>
<body>
Exercice 4 Devoir <br>
L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9. <br>
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante. <br>

Magnitude 	Phrase <br>
1 	Micro-séisme impossible à ressentir. <br>
2 	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. <br>
3 	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. <br>
4 	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. <br>
5 	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. <br>
6 	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. <br>
7 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. <br>
8 	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. <br>
9 	Séisme capable de tout détruire sur une très vaste zone. <br>

Gérer tous les cas.   <br>
Utilser autre chose que des if else. <br><br>

<?php

    echo $result;

?>



    
</body>
</html>