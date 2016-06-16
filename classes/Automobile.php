<?php

class Automobile extends Vehicule{


	// ( __construct) pour initier l'état de certaines propriétés de l'objet qui vient d'etre créé
	function __construct($nb_places){
		parent::__construct(4, $nb_places);
	}

	public function affiche(){
		echo "je suis une automobile à {$this->nbDeRoues} roues et {$this->nbDePlaces} places";
	}

}


