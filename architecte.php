<?php

require "classes/Forme2D.php"; 
require "classes/Figure2D.php"; 




// $formes->ajouter($figure2d1);

// l'architecte crée un plan vide pour ma maison
$ma_maison = new Figure2D();
var_dump($ma_maison);

// je veux un séjour de 35 m²
$ma_maison->ajouter(new Rectangle(7,5));
var_dump($ma_maison);

// je veux une cuisine de 9 m²
$ma_maison->ajouter(new Carre(3));
var_dump($ma_maison);

// je veux un donjon avec un diametre de 4 metres
$ma_maison->ajouter(new Cercle(2));
var_dump($ma_maison);

echo '<hr>';
echo "la surface totale est de:" .$ma_maison->surfaceTotale(). " m²";

echo '<hr>';
echo "le perimetre totale est de:" .$ma_maison->perimetreTotale(). " m";


$ma_maison2 = new Figure2D();
$ma_maison2->ajouter(new Rectangle(5,6));
$ma_maison2->ajouter(new Rectangle(3,4));
$ma_maison2->ajouter(new Carre(4));
$ma_maison2->ajouter(new Carre(4));
$ma_maison2->ajouter(new Carre(3));
$ma_maison2->ajouter(new Carre(2));
$ma_maison2->ajouter(new Cercle(2.5));

echo '<hr>';
echo "la surface totale est de:" .$ma_maison2->surfaceTotale(). " m²";

echo '<hr>';
echo "le perimetre totale est de:" .$ma_maison2->perimetreTotale(). " m";