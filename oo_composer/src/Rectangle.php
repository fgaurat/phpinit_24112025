<?php

namespace Fgaurat\OoComposer;

class Rectangle {

    // private $longueur;
    // private $largeur;

    private static $cpt = 0;

    public function __construct(
        protected $longueur=0,
        protected $largeur=0
        )
    {
        self::$cpt++;
    }
    // public function __construct($longueur,$largeur)
    // {
    //     $this->longueur = $longueur;
    //     $this->largeur = $largeur;
    // }

    public static function getCpt(){
        return self::$cpt;
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function setLongueur($l){
        $this->longueur = $l;
    }
    public function getLargeur(){
        return $this->largeur;
    }

    public function setLargeur($l){
        $this->largeur = $l;
    }



    public function surface(){
        return $this->longueur*$this->largeur;
    }

}
