<?php

namespace Fgaurat\CustomersApp\DAO;

use Fgaurat\CustomersApp\DTO\Customer;

class CustomerDAO{

    private $conn;
    
    public function __construct(string $servername,string $db,string $username,string $password,)
    {
        $this->conn = new \PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function findAll():array
    {
        $data = [];
        $sql = "SELECT * FROM customers_tbl";
        $stmt = $this->conn->query($sql);

        $customers = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($customers as $customer) {
            $c = new Customer(
                $customer['id'],
                $customer['first_name'],
                $customer['last_name'],
                $customer['email'],
                $customer['gender'],
                $customer['ip_address']
            );
            $data[] = $c;
        }
        return $data;
    }

}