<?php

// alteração da variavel 

$global = 69;

echo "$global global 1 <br>";

if (true){

    $global = 10;

    echo "$global teste if <br>";
}

echo "$global global 2 <br>";

function funcao() {
    $global = 100;
    echo "$global local <br>";

}

funcao();

function testandoGlobal() {
    global $global;
    echo "$global global função <br>";

}

testandoGlobal();
?>