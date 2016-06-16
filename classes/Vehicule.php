<?php

class Vehicule{
	
	// propriétés d'instance (de l'objet)
	protected $nbDeRoues;
	protected $nbDePlaces;

	// propriété de clqsse
	public static $langue;

	function __construct($nb_roues, $nb_places){ //constructeur avec 1 paramètre
		$this->nbDeRoues = $nb_roues;
		$this->nbDePlaces = $nb_places;
	}
	
	protected function nombreDeRoues(){
		echo "Nombre de roues: ".$this->nbDeRoues."<br>";
	}

	protected function nombreDePlaces(){
		echo "Nombre de places: ".$this->nbDePlaces."<br>";
	}


	//methode de classe
	public static function afficheLangue(){
		echo self::$langue;
	}


}
// $v = new Vehicule(4,5);
// $v->nbDeRoues = 6; 

// :: alias Paamayim Nekudotayim
Vehicule::$langue = "fr";
Vehicule::afficheLangue();
