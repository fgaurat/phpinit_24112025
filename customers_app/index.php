<?php

declare(strict_types=1);

use Fgaurat\CustomersApp\DAO\CustomerDAO;

require 'vendor/autoload.php';

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "customers_db";

$dao = new CustomerDAO(
    username:$username, 
    db:$db, 
    password:$password,
    servername: $servername
);

// $customers = $dao->findAll();


// foreach ($customers as $customer) {
//     echo $customer . "\n";
// }
echo "<pre>";
print_r($_GET);
echo "</pre>";
