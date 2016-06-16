<?php

abstract class Vivant{
	
}

// $v = new Vivant();

abstract class Vegetal extends Vivant{
	
}

abstract class Animal extends Vivant{
	protected $nom;

	function __construct($nom){
		$this->nom = $nom;
	}
	abstract public function parler();
	public function manger(){
		
	}
}

class Chien extends Animal{
	public function parler(){
		echo "Whouaff!";
	}
}
$médor = new Chien("Médor"); 
$médor->parler();
var_dump($médor);

class Chat extends Animal{
	public function parler(){
		echo "Miaou !";
	}
}
$batard = new Chat("Batard");
$batard->parler();
var_dump($batard);

abstract class Fruit extends Vegetal{
	
}

class Pomme extends Fruit{
	
}

class Golden extends Pomme{
	
}

$pomme = new Golden(); 
// $chien = new Animal();

var_dump($pomme instanceOf Fruit);
var_dump($pomme instanceOf Animal);
var_dump($pomme instanceOf Vivant);

echo get_class($pomme);
echo '<br>';
// echo get_class($chien);