<?php

class Vivant{
	
}

class Vegetal extends Vivant{
	
}

class Animal extends Vivant{

}

class Fruit extends Vegetal{
	
}

class Pomme extends Fruit{
	
}

class Golden extends Pomme{
	
}

$pomme = new Golden(); 
$chien = new Animal();

var_dump($pomme instanceOf Fruit);
var_dump($pomme instanceOf Animal);
var_dump($pomme instanceOf Vivant);

echo get_class($pomme);
echo '<br>';
echo get_class($chien);