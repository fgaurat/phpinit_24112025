<?php


namespace Fgaurat\OoComposer;


class Cercle implements CalcGeoInterface{

    public function __construct(private $rayon){}

    public function getRayon(){
        return $this->rayon;
    }

    public function setRayon($r){
        $this->rayon = $r;
    }


    public function surface(){
        return M_PI*pow($this->rayon,2);
        
    }






}

