<?php
require 'vendor/autoload.php';

use Fgaurat\OoComposer\Carre;
use Fgaurat\OoComposer\Cercle;
use Fgaurat\OoComposer\Rectangle;

$r = new Rectangle(2,3);
$r1 = new Rectangle(22,33);
echo $r->surface();
echo "\n";
$r->setLargeur(45);
echo $r->surface();
echo "\n";
echo $r->getLargeur();
echo "\n";

echo Rectangle::getCpt();
echo "\n";

$c = new Carre(2);
echo $c->surface(); //4 
echo "\n";
echo $c->getCote(); //4 
echo "\n";
try{

    $ce = new Cercle("toto");
    echo $ce->getRayon();
    
    echo "\n";
    // $ce->setRayon(-3);
    // echo "\n";
    echo $ce->getCouleur();
    echo "\n";
    echo $ce->surface();
    echo "\n";
}
catch(InvalidArgumentException $e){
    echo $e."\n";
}

echo "la suite\n";

