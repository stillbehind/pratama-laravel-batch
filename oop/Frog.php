<?php

require_once("Animal.php");


class Frog extends Animal 
{
    public function jump(){
        return "Jump : Hop Hop <br> <br>";
    }
}
?>