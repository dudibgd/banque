



<?php

class Client {
	// propriétés d'instance (de l'objet)
	public $nom; 
	public $prenom;
	private $numero_client;
	// public $fondPerso; 
	function __construct($nom, $prenom){ //constructeur, pour ouverture de compte
		$this->numero_client = uniqid();
		$this->nom = $nom; 
		$this->prenom = $prenom; 

	}
}	



	
