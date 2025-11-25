<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1); 
 error_reporting(E_ALL);
$name = "Fred";



$arr = ['Value 01',"Value 02","Value 03"];

// $arr_kv =[
//     "name"=>"Gaurat",
//     "first_name"=>"Fred",
//     "job"=>"dev",
//     "age"=>"49"

// ];

$arr_kv =[
    [
    "name"=>"Gaurat",
    "first_name"=>"Fred",
    "job"=>"dev",
    "age"=>"49"

    ],
    [
    "name"=>"Martin",
    "first_name"=>"Louis",
    "job"=>"tester",
    "age"=>"39"

    ],
    [
    "name"=>"Dupont",
    "first_name"=>"Jean",
    "job"=>"designer",
    "age"=>"29"

    ],
];
