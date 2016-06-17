<?php

require "classes/Autoloader.php";
Autoloader::register();


$var_class = "Roi";
$o = new $var_class(new Pique());

$couleurs = ["Pique", "Coeur", "Carreau", "Trefle"];
$cartes = ["Ace", "Roi", "Dame", "Valet", "Dix", "Neuf", "Huit", "Sept", "Six","Cinq","Quatre","Trois","Deux"];

$jeu = [];
foreach ($couleurs as $couleur) {
	foreach ($cartes as $carte) {
	$jeu[] = new $carte(new $couleur()); // la premiere est new Ace(new Pique)
	}
}

// var_dump($jeu);

shuffle($jeu);
// var_dump($jeu);

$jeu1 = array_slice($jeu, 0, 26);
$jeu2 = array_slice($jeu, 26, 26);


$force_du_jeu_1 = 0;
$force_du_jeu_2 = 0;

// echo "Le jeu du joueur 1 est: <br>";
foreach($jeu1 as $carte){
	// echo $carte->affiche()." , ";
	$force_du_jeu_1 += $carte->getValeur(); 
}
// echo "La somme est: ".$force_du_jeu_1;

// echo "<hr>";
// echo "Le jeu du joueur 2 est: <br>";
foreach($jeu2 as $carte){
	// echo $carte->affiche()." , "; 
	$force_du_jeu_2 += $carte->getValeur(); 
}
// echo "La somme est: ".$force_du_jeu_2;
// var_dump($jeu1);
// var_dump($jeu2);


// Bataille
while(count($jeu1) >0 && count($jeu2)>0){
	
		$un = array_shift($jeu1);
		$deux = array_shift($jeu2);

		// if($un->valeur() > $deux->valeur()){

		 	
		//  	array_push($jeu1, $jeu1[0]);
		//  	array_push($jeu1, $jeu2[0]);
		
		// }else{
		// 	echo "non";
		// }


		// ($jeu1[0]->valeur < $jeu2[0]->valeur){

		//  	 mettre $jeu1[0] && $jeu2[0] dans $jeu2
		// }else($jeu1[0]->valeur = $jeu2[0]->valeur){
		//  	echo "Bataille!"; 
		//  	$jeu1[0+1] = $jeu2[0+1]
		//  	recomencer
	 // 	}
}
echo $un;



