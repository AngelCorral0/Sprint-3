<?php

class Tigger {
 
    private static $instances = [];
    private static $roarCount = 0;

     private function __construct() 
     {
        echo "Building character... <br>";
     }
     
     protected function __clone() { }

     public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance() : Tigger
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function roar() {
       
        self::$roarCount++;
        echo "Grrr!" . "<br>";
    }

    public function getCounter()
    {
        echo "Ha rugit:" . self::$roarCount . " vegades";
    }

    


    
}








?>