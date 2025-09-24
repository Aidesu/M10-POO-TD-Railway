<?php

include_once(__DIR__."/Train.php");

class Passenger extends Train{

    private string $name;
    private int $ticketNmb;
    protected int $trainAssign;
    private static $passengers = [];

    public function __construct($name, $ticketNmb, $trainAssign) {
        $this->name = $name;
        $this->ticketNmb = $ticketNmb;
        $this->trainAssign = $trainAssign;

        self::$passengers[] = $this;
    }

    public function getName(){
        return $this->name;
    }

    public static function showPassengers() {
        foreach(self::$passengers as $passenger){
            echo "Passager : " . $passenger->name . " | Billet n°" . $passenger->ticketNmb . " | Train assigné : ". $passenger->trainAssign. "\n";
        }
    }
    

}
