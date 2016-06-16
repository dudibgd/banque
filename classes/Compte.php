<?php

class Compte{
	private $numero_compte;
	private $client; 
	private $solde; 

	function __construct($client, $montant_depot){
		$this->client = $client; 
		$this->solde = $montant_depot; 
	}

	
	public function retrait($montant){
		if($montant>0 && $this->solde-$montant>=0){
			$this->solde -= $montant; 
			$this->solde -= 1; 
			echo "tax de 1E pour le plaisir :) "; // bolje bi bilo da echo ide u posebnu funkciju, tj da svaka funkscija/metoda obavlja miinimum posla, tj samo jednu opraciju
			return true; 

		}else{
			echo "pas possible"; 
			return false;
		}
	}

	public function depot($montant){		
		if($montant>0){
			$this->solde += $montant; 
				return $this; 
		}else{
			echo "SVP, demandez une valeur positive";
		}
	}

	public function virement($montant, $compteDeVirement){	
		if($montant>0 && $this->solde-$montant>=0){	
			$this->solde -= $montant; 
			$compteDeVirement->solde += $montant;
			return $this; 

			//$this->retrait($montant);
			//$compteDeVirement->depot($montant);

		}else{
			echo " votre demande n'est pas possible";
		}
	}


}

require "Client.php"; 
$client_1 = new Client("Dudi", "Milanovic"); 
$compte_1 = new Compte($client_1, 500);
var_dump($compte_1); 
$client_2 = new Client("John", "Hitchens"); 
$compte_2 = new Compte($client_2, 5500);
var_dump($compte_1); 

// $compte_1->retrait(100);
// var_dump($compte_1);

// $compte_1->depot(100);
// var_dump($compte_1);

// $compte_1->virement(200, $compte_2);
// var_dump($compte_1);
// var_dump($compte_2);


// $compte_1->retrait(10100);
// var_dump($compte_1);

$compte_1->virement(7000, $compte_2);
var_dump($compte_1);
var_dump($compte_2);


$compte_1->depot(100)->depot(600);
var_dump($compte_1); 



$compte_1->depot(100)->depot(600)->retrait(3890);
var_dump($compte_1); 

$compte_1->depot(100)->depot(600)->retrait(3890);
var_dump($compte_1); 
