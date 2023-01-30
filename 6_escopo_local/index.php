<?php

// não ha alteração 

$n = 10;

echo "$n global <br>";

function teste () {

$n = 5;

echo "$n local <br>";

}

teste();



$nome = "Luis";

echo "$nome global 2 <br>";

function nome(){

    $nome = "Felipe";

    echo "$nome local 2 <br>";
}

nome();

?>