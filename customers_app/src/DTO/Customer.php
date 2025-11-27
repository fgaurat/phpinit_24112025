<?php

namespace Fgaurat\CustomersApp\DTO;

class Customer{
    //id,firstName,lastName,email,gender,ipAddress
    public function __construct(
        public ?int $id=null,
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $gender,
        public string $ipAddress
        )
    {
        
    }

    public function __toString()
    {
        return sprintf("Customer #%d: %s,",$this->id,$this->lastName);
    }

}