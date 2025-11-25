<?php


namespace Fgaurat\OoComposer;


class Carre extends Rectangle{

    public function __construct($cote){
        parent::__construct($cote,$cote);
    }

    public function getCote(){
        return $this->longueur;
    }

    public function setCote($l){
        $this->longueur = $l;
        $this->largeur = $l;
    }


}

