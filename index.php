<?php

include_once(__DIR__."/models/Train.php");
include_once(__DIR__."/models/Passenger.php");
include_once(__DIR__."/models/Gare.php");


//* #################### TRAIN #######################
$geromeLeTrain = new Train(1, "Limoge", "05:45PM", "A");
$jaquelilneLeTrain = new Train(2, "North korea", "02:30AM", "D");
$rerA = new Train(3, "Chessy parc Dysneland", "11:15AM", "C");

//* #################### PASSENGERS #######################
$michel = new Passenger("Michel", 145, 1);
$margueritte = new Passenger("Margueritte", 901, 2);
$jean = new Passenger("Jean", 902, 2);
$lucie = new Passenger("Lucie", 903, 2);
$pierre = new Passenger("Pierre", 904, 2);
$camille = new Passenger("Camille", 905, 2);



echo "\n";
echo "############### Train ####################\n";
Train::showTrains();

echo "\n";
echo "############### Passager ####################\n";
Passenger::showPassengers();


?>