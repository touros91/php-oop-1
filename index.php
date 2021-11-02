<?php

require_once __DIR__ . "/classes/Movie.php";

echo "<h1>Film</h1>";

$scarface = new Movie("Scarface", "Brian De Palma", "Drammatico", 161, 4.2, 1983);

$scarface->setGenre("Thriller");

echo "<p>Il film <strong>{$scarface->getTitle()}</strong> è uscito nell'anno {$scarface->getReleaseYear()}. Genere: {$scarface->getGenre()}.</p>";

$hachiko = new Movie("Hachiko - Il tuo migliore amico", "Lasse Hallström", "Drammatico", 93, 4.5, 2009);

$hachiko->setGenre("Famiglia/Drammatico");

echo "<p>Il film <strong>{$hachiko->getTitle()}</strong> è uscito nell'anno {$hachiko->getReleaseYear()}. Genere: {$hachiko->getGenre()}.</p>";

$inception = new Movie("Inception", "Christopher Nolan", "Fantascienza", 148, 4.3, 2010);

$inception->setGenre("Azione");

echo "<p>Il film <strong>{$inception->getTitle()}</strong> è uscito nell'anno {$inception->getReleaseYear()}. Genere: {$inception->getGenre()}.</p>";