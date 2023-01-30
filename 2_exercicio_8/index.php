<?php

$nome = "Felipe";
$idade = 18;
$sexo = "Masculino";
$altura = 1.80;
$caracter = ["Status" => "Namorando", "Peso" => "80 kg", "Pele" => "Parda"];



echo $nome;
echo "<br>";

echo $caracter["Peso"];
echo "<br>";

echo $caracter["Pele"];
echo "<br>";

echo $caracter["Status"];
echo "<br>";

echo $idade;
echo "<br>";

echo $sexo;
echo "<br>";

echo "<br>";
echo "<br>";

if (is_int($idade)) {
    echo "Sua idade é de $idade anos.";
}

echo "<br>";

if (is_float ($altura))
echo "Sua altura é de $altura metros.";



?>