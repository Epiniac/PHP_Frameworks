<?php

$dsn = 'mysql:host=localhost;dbname=blog'; // DSN = Data Source Name

// PDO = PHP Data Object
$bdd = new PDO($dsn, 'root', '');

$resultat = $bdd->query('SELECT * FROM article'); // = PDOStatement = conteneur à résultat
/** 
 * Ce n'est pas la donnée en elle-même
 * Il me faut aller la chercher
 */
echo '<pre>';
var_dump($resultat);
echo '<hr>';

// En anglais "to fetch" = "aller chercher"
var_dump($resultat->fetch()); // Aller chercher UNE ligne
echo '<hr>';
var_dump($resultat->fetchAll()); // Aller chercher TOUTES les lignes
echo '</pre>';

/**
 * Le fetch déplace un "curseur" virtuel interne
 * Ce qui fait que le 1er fetch (unitaire) sort 1 ligne
 * Et le 2nd fetch (total) ne sort que les 2 dernières.
 * 
 * Si on rajoutait un 3e fetch, il retournerait false puisqu'il n'y a plus de ligne après.
 */