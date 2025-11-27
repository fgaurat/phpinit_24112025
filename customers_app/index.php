<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
require 'vendor/autoload.php';

use Fgaurat\CustomersApp\Controller\CustomerController;
use Fgaurat\CustomersApp\DAO\CustomerDAO;


session_start();

$_SESSION['hello'] = "world";
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

$url = $_GET['url'] ?? '';
$controller = new CustomerController($dao);

switch($url){
    case '':
        require_once __DIR__."/views/home/index.php";
        break; 
    case 'customers':
        $controller->index();
        break;
    case 'customers/form':
        require_once __DIR__."/views/customers/form.php";
        break;
    case 'customers/save':
        $controller->save();
        break;
    default:
        http_response_code(404);
        echo "<h1>Page non trouvée</h1>";
        break;
}
