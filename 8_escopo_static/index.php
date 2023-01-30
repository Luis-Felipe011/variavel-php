<?php

function teste() {

    $a = 0;
    $a++;

    echo "$a <br>";

}

teste();
teste();
teste();

function testeStatic() {

    Static $a = 0;
    $a++;

    echo "$a <br>";

}

testeStatic();
testeStatic();
testeStatic();


?>