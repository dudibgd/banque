<?php

require "classes/Vehicule.php";
require "classes/Automobile.php";
require "classes/Moto.php";

$auto = new Automobile(5); 
$auto->affiche();
echo '<br>';
$moto = new Moto();
$moto->affiche();

// nombreDeRoues(); // comment ca marche cet affichage?!?

