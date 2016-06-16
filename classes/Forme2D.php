<?php

// un INTERFACE est une classe abstraite dont toutes les methodes sont abstraites
interface Forme2D{
	public function aire();
	public function perimetre();
}

class Carre implements Forme2D{
	protected $cote;

	function __construct($cote){
		$this->cote = $cote;
	}

	public function aire(){
		return $this->cote * $this->cote;
	} 

	public function perimetre(){
		return 4 * $this->cote;
	}
}

class Rectangle implements Forme2D{
	protected $coteA; 
	protected $coteB; 

	function __construct($coteA, $coteB){
		$this->coteA = $coteA;
		$this->coteB = $coteB;
	}


	public function aire(){
		return $this->coteA * $this->coteB;
	}

	public function perimetre(){
		return 2 * ($this->coteA + $this->coteB);
	}
}

class Cercle implements Forme2D{
	protected $radius; 
	 

	function __construct($radius){
		$this->radius = $radius;
	}


	public function aire(){
		return pow($this->radius,2) * M_PI;
	}

	public function perimetre(){
		return 2 * $this->radius * M_PI;
	}
}

// $carre = new Carre(3); 
// $rectangle = new Rectangle(4, 5);
// $cercle = new Cercle(6);