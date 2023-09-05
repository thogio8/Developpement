<?php

require "./vendor/autoload.php";

$ligue1 = new App\Championnat("Ligue 1");
echo $ligue1->getNom();

$psg = new App\Equipe("PSG", "Luis Enrique", "1970");
$om = new App\Equipe("OM", "Marcelino", "1899");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);
echo PHP_EOL;
echo $ligue1->getNombreEquipes() . PHP_EOL;

foreach ($ligue1->getEquipes() as $equipe){
    echo $equipe->getNom() . PHP_EOL;
}