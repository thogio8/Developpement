<?php

require "./vendor/autoload.php";
use App\Equipe;
use App\Championnat;
use App\dossier1\Personne;


$ligue1 = new Championnat("Ligue 1");

$ligue1->ajouterEquipesCSV("./csv/Equipes.csv");

dump($ligue1);