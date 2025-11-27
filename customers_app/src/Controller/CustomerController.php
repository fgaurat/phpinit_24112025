<?php

namespace Fgaurat\CustomersApp\Controller;

use Fgaurat\CustomersApp\DAO\CustomerDAO;

class CustomerController{



    public function __construct(private CustomerDAO $customerDAO)
    {
    }


    public function index(){
        $customers = $this->customerDAO->findAll();

        require_once __DIR__."/../../views/customers/index.php";
    }





}
