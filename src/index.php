<?php

require_once './Vechicule.php';
require_once './Peugeot.php';
require_once './Renault.php';

$peugeot = new Peugeot();
echo $peugeot->demarrer();
echo " ";
echo $peugeot->carburant();
echo " ";
echo $peugeot->nbTest();
echo "<br>";

$renault = new Renault();
echo $renault->demarrer();
echo " ";
echo $renault->carburant();
echo " ";
echo $renault->nbTest();


