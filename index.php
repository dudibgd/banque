<?php

// require "classes/Vehicule.php";
// require "classes/Automobile.php";
// require "classes/Moto.php";


// Aotoload (fonction interne à PHP)

// methode 1, avec autoload
function __autoload($class_name){
	require "classes/".$class_name.".php";
}



// $auto = new Automobile(5); 
// $auto->affiche();
// echo '<br>';
// $moto = new Moto();
// $moto->affiche();


// methode 2, avec spl_autoload_register (pour plusieur fichier, sous-fichier etc, genre 'classes')
// function mon_autoloader($class_name){
// 	require "classes/".$class_name.".php";
// }
// spl_autoload_register('mon_autoloader');
// $auto = new Automobile(5); 


// methode 3, avec une class défini par nous meme, class Autoloader (fichier à part)
// version A
// require "classes/Autoloader.php";
// spl_autoload_register(array('Autoloader', 'autoload'));
// $auto = new Automobile(5); 
// $auto->affiche();
// echo '<br>';
// $moto = new Moto();
// $moto->affiche();

// version B
require "classes/Autoloader.php";
Autoloader::register();
$auto = new Automobile(5); 
$auto->affiche();
echo '<br>';
$moto = new Moto();
$moto->affiche();

