<?php

require ("animal.php") ;
require ("Ape.php") ;
require ("Frog.php") ;

$sheep = new Animal("shaun");

echo $sheep->name . "<br>"; // "shaun"
echo $sheep->legs . "<br>"; // 2
echo $sheep->cold_blooded . "<br><br>";// false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
echo $sungokong -> name ."<br>" ;
echo $sungokong -> legs ."<br>" ;
echo $sungokong->yell() . "<br><br>";
// $sungokong->yell() // "Auooo"

$kodok = new Frog("buduk");
echo $kodok -> name ."<br>" ;
echo $kodok -> legs ."<br>" ;
$kodok->jump() ; // "hop hop"
?>