<?php

include_once(__DIR__."/Gare.php");

class Train extends Gare {

    protected int $id;
    private string $destination;
    private string $timeDepart;
    private string $plateforme;
    private static $trains = [];


    public function __construct($id, $destination, $timeDepart, $plateforme ) {
        $this->id = $id;
        $this->destination = $destination;
        $this->timeDepart = $timeDepart;
        $this->plateforme = $plateforme;

        self::$trains[] = $this;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getTime() {
        return $this->timeDepart;
    }

    public function getId() {
        return $this->id;
    }

    public function getPlateforme() {
        return $this->plateforme;
    }

    public static function showTrains() {
        foreach(self::$trains as $train){
             echo "Train n°" . $train->getId() . " | Destination : " . $train->getDestination(). " | Depart : " .$train->getTime(). " |  Plateforme : " . $train->getPlateforme() ."\n";
        }
    }

}