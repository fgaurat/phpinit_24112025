<?php


namespace Fgaurat\OoComposer;

use InvalidArgumentException;

class Cercle implements CalcGeoInterface{

    use CouleurTrait;

    public function __construct(private $rayon){}

    public function getRayon(){
        return $this->rayon;
    }

    public function setRayon($r){
        if($r < 0){
            throw new InvalidArgumentException("Hooooo !");
        }
        $this->rayon = $r;
    }


    public function surface(){
        return M_PI*pow($this->rayon,2);
        
    }






}

