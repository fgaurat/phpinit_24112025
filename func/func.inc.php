<?php


$s = "Il fait beau";
$nb_chars = strlen($s);
$to_upper = strtoupper($s);

$d = date("d/m/Y");

function add($a,$b){
    $result = $a+$b;
    return $result;
}

// http://localhost:8000/?value_1=12&value_2=4
$v1 = $_GET['value_1'] ?? 0;
$v2 = $_GET['value_2'] ?? 0;

$r = add($v1,$v2);

//---------------------------------------------
//passage par référence
function increment(&$nombre){
    $nombre++;
}

$n = 0;
increment($n);




