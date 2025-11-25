<?php

namespace Fgaurat\OoComposer2;

class Rectangle {

    private $longueur;
    private $largeur;

    public function __construct($longueur,$largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function surface(){
        return $this->longueur*$this->largeur;
    }

}
