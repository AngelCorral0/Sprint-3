<?php

class Tigger {
 
    private static  $pepe;

     private function __construct() 
     {
        echo "Building character...";
     }

    public function roar() {
            echo "Grrr!";
    }

    public static function getPepe()
    {
         if(!self::$pepe){
                self::$pepe = new self();
        }
        return self::$pepe;
    }
}








?>