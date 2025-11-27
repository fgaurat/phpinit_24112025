<?php

namespace Fgaurat\CustomersApp\Controller;

use Fgaurat\CustomersApp\DAO\CustomerDAO;
use Fgaurat\CustomersApp\DTO\Customer;

class CustomerApiController{
    public function __construct(private CustomerDAO $customerDAO)
    {
    }

    public function index():void{
        $customers = $this->customerDAO->findAll();
        header('Content-type: application/json;charset=utf-8');
        echo json_encode($customers);
    }



}
