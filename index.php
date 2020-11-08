<?php

require_once 'Car.php';

$titine = new Car('yellow', 4 , "kerosene", true);

echo $titine->getParkBrake();

try{
    $titine->start ();
} catch(Exception $e){
    echo $e;
    $titine->setParkBrake (false);
} finally {
    echo "Ma voiture roule comme un donut <br/>";
}

var_dump($titine);
