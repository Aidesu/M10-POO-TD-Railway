<?php

include_once "/Train.php";
include_once "/Passenger.php";

class Gare{

public static function showGare() {
    foreach(Train::$trains as $train){
        echo "test";
        foreach(Passenger::$passengers as $elem){
            echo "Feur";
        }
    }
}
}
