<?php

$a= 2;
$b =& $a;

echo $a;
echo "<br>";
echo $b;
echo "<br>";

$b = 4;
echo "Atribuição após ref<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";


$a= 90;
echo "Atribuição após ref2 <br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";

$nome = "Felipe";
$nome2 =& $nome;

echo "Atribuição em uma string <br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";


?>