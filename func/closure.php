<?php
    $x = 4 + $p;
    
    $make_incrementor = function($n){ // 42
        return function($x) use ($n){
            return $x+$n;
        };
    };

    $f = $make_incrementor(42);
    echo $f(0); // 42
    echo $f(1); // 43
