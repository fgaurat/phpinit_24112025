<?php
namespace Fgaurat\OoComposer;


trait CouleurTrait{

    private $couleur = "Rouge";

    public function getCouleur(){
        return $this->couleur;
    }

    public function setCouleur($c){
        $this->couleur = $c;
    }




}
