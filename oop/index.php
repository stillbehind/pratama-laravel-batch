<?php

require_once("Animal.php");
require_once("Frog.php");
require_once("Ape.php");

$sheep=new Animal ("shaun");
echo "Name : " . "". $sheep->name ."<br>";
echo "legs : " ."" . $sheep->legs ."<br>";
echo "cold blooded : ". $sheep->cold_blooded ."<br> <br>";  

$kodok=new Frog ("buduk");
echo "Name : " . "". $kodok->name ."<br>";
echo "legs : ". $kodok->legs ."<br>";
echo "clood blooded : ". $kodok->cold_blooded ."<br>";
echo $kodok -> jump();

$sungokong=new Ape ("kera sakti");
echo "Name : " . "". $sungokong->name ."<br>";
echo "legs : ". $sungokong->legs ."<br>";
echo "clood blooded : ". $sungokong->cold_blooded ."<br>";
echo $sungokong -> yell();

?>