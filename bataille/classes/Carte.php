<?php


abstract class Carte {
	public $couleur;
	public $valeur;

	function __construct($couleur, $valeur) {
		$this->couleur = $couleur;
		$this->valeur = $valeur;
	}

	public function affiche(){
		return get_class($this)." de ".get_class($this->couleur);
	}

	public function getValeur(){
		return $this->valeur; 
	}
}


