<?php
	// -CONNECTION A LA BDD-
	$dsn='mysql:host=localhost;dbname=blog';

	// PDO = PHP Data Object
	$bdd = new PDO($dsn, 'root', '');
	// Je suis connecté
	
	var_dump($bdd);

	// -REQUETE SQL-
	$res = $bdd->query('SELECT * FROM article');
	var_dump($bdd);
	
	// -MANIPULER/RECUPERER LA DONNEE-
	$article = $res->fetch(); // Un seul article
	$articles = $res->fetchAll(); // Tous les articles
	// Fetch fait avancer un "curseur" ainsi, il n'y a plus de fetch après un fetchAll()

		
