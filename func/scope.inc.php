<?php

$g = "var globale";


function test_scope(){
    global $g;
    $l = "var locale";
    $g = "une autre valeur";
    echo "l: $l </br>";
    echo "g: $g </br>";
    
    print_r($GLOBALS);
}

test_scope();




