<?php
class Automobile{
	// propriérés d'instance (lié à l'objet)
	public $consommation; // 10l/100
	protected $carburant; // essence, diesel, gpl 
	protected $marque; // ferrari, citroen...
	protected $modele; // C4, R5...
	protected $portes; // 3, 5 portes
	protected $roues = 4; // 4 roues par automobile
	protected $frequence_revision; // tout les 10 000 km
	protected $vitesse = 0;
	protected $moteur = 0; // 0= éteint, 1 = allumé
	protected $vitesse_max;


	// propriétés de classe (lié à la class)
	public static $langue = "fr"; 

	// méthode de classe
	public static function changerlangue($lang) {
			self::$langue = $lang;
	}

	// méthodes
	// démarrer, arreter, accellerer, avancer, reculer, freiner, faire_le_plein, allumer_les_phares, etc, afficher_la_vitesse

	function __construct($v_max){
		$this->vitesse_max = $v_max; 
	}

	public function bonjour(){
		if(self::$langue == "fr"){
			echo "Bonjour";
		}else{	
			echo "Hello";
		}
	}

	public function demarrer(){
		// mettre le moteur en route
		return $this->moteur = 1;
	}	
	
	public function arreter(){
		// mettre le moteur à l'arret, c'est à dire condition: vitesse = 0
		if($this->vitesse == 0){
			$this->moteur = 0; 
		}else{
			echo 'impossible, votre véhicule roule encore...<br>';
			echo $this->etat();
		}	
	}

	public function etat(){
		echo "moteur = ".$this->moteur.'<br>';
		echo "vitesse = ".$this->vitesse.' km/h<br>';
		echo "<hr>";
	}

	public function accellerer($speed){
		if($speed + $this->vitesse > $this->vitesse_max){
			$this->vitesse = $this->vitesse_max;
		}else{
			$this->vitesse += $speed;
		}
	}

	public function ralentir($speed){
		$this->vitesse -= $speed;
	}
}


