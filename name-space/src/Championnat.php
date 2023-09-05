<?php

namespace App;
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