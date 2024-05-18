<?php
require_once ('animal.php');
require_once ('frog.php');
require_once ('ape.php');

$sheep = new Animal("shaun");

echo "Name: $sheep->name <br>"; 
echo "Legs: $sheep->legs <br>"; 
echo "Cold Blooded: $sheep->cold_blooded <br> <br>"; 

$kodok = new Frog("buduk");

echo "Name: $kodok->name <br>";
echo "Legs: $kodok->legs <br>";
echo "Cold Blooded: $kodok->cold_blooded <br>";
$kodok->jump();

$sungokong = new Ape("Kera Sakti");

echo "Name: $sungokong->name <br>";
echo "Legs: $sungokong->legs <br>";
echo "Cold Blooded: $sungokong->cold_blooded <br>";
$sungokong->yell();
?>