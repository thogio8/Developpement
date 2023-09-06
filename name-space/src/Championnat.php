<?php

namespace App;

use League\Csv\Reader;

class Championnat{
    private string $nom;
    /**
     * @var Equipe[]
     */
    private array $equipes;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->equipes = [];
    }

    /**
     * @param Equipe $equipe
     * @return void
     */
    public function ajouterEquipe(Equipe $equipe) : void{
        $this->equipes[] = $equipe;
    }

    /**
     * @param string $path
     * @return void
     */
    public function ajouterEquipesCSV(string $path) : void{
        $csv = Reader::createFromPath($path, 'r');
        $csv->setHeaderOffset(0);
        $csv->setDelimiter(";");

        $records = $csv->getRecords();

        foreach($records as $record){
            $equipe = new Equipe($record["Nom"], $record["Entraineur"], $record["Annee"]);
            $this->equipes[] = $equipe;
        }
    }

    /**
     * @return int
     */
    public function getNombreEquipes() : int{
        return count($this->equipes);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return array
     */
    public function getEquipes(): array
    {
        return $this->equipes;
    }


}