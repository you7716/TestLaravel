<?php

namespace App\Models;

class Cours {
    public int $Num;
    public string $nom;
    public int $duree;

    public function __construct($Num,$nom,$duree)
    {
        $this->Num = $Num;
        $this->nom = $nom;
        $this->duree = $duree;

    }

}