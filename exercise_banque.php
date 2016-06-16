<?php

	require_once "classes/Client.php";

		$client_1 = new Client("Milanovic", "Dudi"); 
		var_dump($client_1);


		// création de 100 clients
		$clients = [];
		for($i=0; $i<100; $i++){
			$clients[] = new Client("N".$i, " P".$i);
		}


		// affichage des clients
		echo "<ul>";
		foreach($clients as $client){
			echo "<li>{$client->nom}{$client->prenom}</li>";
		}
		echo "</ul>";
