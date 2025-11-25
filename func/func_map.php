<?php


function mult2($i){
    return $i*2;
}

    $l = [10,20,30,40,50];

    // $r = [];

    // foreach ($l as $value) {
    //     $r[] = $value*2;
    // }
    // echo "<pre>";
    // print_r($l);
    // print_r($r);
    // echo "</pre>";
    // $r = array_map("mult2",$l);
    // $r = array_map(function($i){
    //     return $i*2;
    // },$l);
    $r = array_map(fn($i)=> $i*2,$l);

    echo "<pre>";
    print_r($r);
    echo "</pre>";