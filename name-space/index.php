<?php

require "./vendor/autoload.php";
use App\Equipe;
use App\Championnat;

$ligue1 = new Championnat("Ligue 1");
echo $ligue1->getNom();

$psg = new Equipe("PSG", "Luis Enrique", "1970");
$om = new Equipe("OM", "Marcelino", "1899");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);
echo PHP_EOL;
echo $ligue1->getNombreEquipes() . PHP_EOL;

foreach ($ligue1->getEquipes() as $equipe){
    echo $equipe->getNom() . PHP_EOL;
}