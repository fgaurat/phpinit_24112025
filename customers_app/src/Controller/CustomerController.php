<?php

namespace Fgaurat\CustomersApp\Controller;

use Fgaurat\CustomersApp\DAO\CustomerDAO;
use Fgaurat\CustomersApp\DTO\Customer;

class CustomerController{



    public function __construct(private CustomerDAO $customerDAO)
    {
    }


    public function index(){
        $customers = $this->customerDAO->findAll();
        
        require_once __DIR__."/../../views/customers/index.php";
    }
    
    public function save(){
        
        $c = new Customer(
            firstName:$_POST['firstName'],
            lastName:$_POST['lastName'],
            email:$_POST['email'],
            gender:$_POST['gender'],
            ipAddress:$_POST['ip'],
            id:null
        );

        $this->customerDAO->save($c);
        $_SESSION['success'] = "Customer ajouté avec succès !";

        
        // header("Location: /customers",true,301);
        header("Location: /customers_app/customers");
    }





}
