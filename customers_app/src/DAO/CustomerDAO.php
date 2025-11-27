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

    public function save(Customer $customer):Customer{
        if($customer->id == 0) {
            // Insertion d'un nouveau client
            $sql = "INSERT INTO customers_tbl (first_name, last_name, email, gender, ip_address) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $customer->firstName,
                $customer->lastName,
                $customer->email,
                $customer->gender,
                $customer->ipAddress
            ]);
            
            // Récupérer l'ID généré automatiquement
            $customer->id = $this->conn->lastInsertId();
        } else {
            // Mise à jour d'un client existant
            $sql = "UPDATE customers_tbl SET first_name=?, last_name=?, email=?, gender=?, ip_address=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $customer->firstName,
                $customer->lastName,
                $customer->email,
                $customer->gender,
                $customer->ipAddress,
                $customer->id
            ]);
        }
        
        return $customer;
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