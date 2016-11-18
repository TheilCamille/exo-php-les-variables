<?php
//exo 1

$magnifique = 'Camille';
echo "Hello, ". $magnifique ." tu va bien ?</br>";

//exo 2

$nom = 'Theil';
$prenom = 'Camille';
$age = 26;

echo " Tu t'appelles ".$nom." ".$prenom." et tu as ". $age ." ans</br>";

//exo 3

$km = 1;
echo "Tu as parcouru ".$km." km</br>";
$km = 3;
echo "Tu as parcouru ".$km." km</br>";
$km = 125;
echo "Tu as parcouru ".$km." km</br>";

//exo 4

$string = "Incroyable";
$int = 55;
$float = 3.14;
$bolean = True;

echo $string."</br>".$int."</br>".$float."</br>";
var_dump($bolean);

//exo 5
echo "</br>";
$variableVide = null; 
var_dump($variableVide);

$variableVide = 777;
echo "</br>";
echo "La variable est ".$variableVide;

//exo 6

$trueName = 'Horscontexte';
echo "</br>Bonjour ".$trueName.", comment vas tu ?.";

//exo 7 (voir exo 2)

//exo 8

$math1 = 3 + 4;
$math2 = 5 * 20;
$math3 = 45 / 5;

echo "<br>3 + 4 donne ".$math1."</br>";
echo "5 X 20 donne ".$math2."<br>";
echo "45 divisé par 5 donne ".$math3."<br>";
?>