<?php

require_once __DIR__ . "/classes/Movie.php";

$scarface = new Movie("Scarface", "Brian De Palma", "Drammatico", 161, 4.2, 1983);

$scarface->setGenre("Thriller");

echo "<h1>Il film {$scarface->getTitle()} è uscito nell'anno {$scarface->getReleaseYear()}</h1>";