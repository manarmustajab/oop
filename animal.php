<?php

class Animal {
    public  $name ;
    public $legs = 2 ;
    public $cold_blooded = "false" ;

    public function __construct($string) {
        $this -> name = $string;
    }
}


?>