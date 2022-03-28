<?php
/* La pratique veut que l'on affiche un objet dans une page différente de celle de la class.La class se trouve dans un fichier sxterne qui prtendra une majuscule et qui devra être nommé */ 
require "Personnage.php";
/* Une notion importante à comprendre est que chque objet est différent. C'est à dire que si je que crée une nouvelle instance de ma classe, le personnage hérotera des propriétés mais pas des méthodes si je ne lui appliqyue pas .*/ 
// Créer un personnage et lui appliquera la méthode crier() et en faire un var_dump
$mario = new Personnage("Mario");
$luigi =new Personnage("Lugie");

var_dump($mario);
echo "</br>";
$mario->crier();
echo "</br>";
$mario->regenerer(5);
var_dump($mario);
echo "</br>";

var_dump($luigi);
echo "</br>";

$leo = new Personnage("Loe");
$leo->crier();
echo "</br>";
$leo->regenerer();
// On applique la méthode regenerer aà notre personnage et, par conséquent, sa vie repasse à 100
var_dump($leo);
echo "</br>";
$leo->vie = 0;
var_dump($leo->mort());


