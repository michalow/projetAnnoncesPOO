<?php
require_once "models/User.class.php";

class Member extends User{
    private $address;
    private $postalCode;
    private $city;


    public function __construct($id, $username, $email, $pwd, $statut, $dateInscrip, $address, $postalCode, $city){
        parent::__construct($id, $username, $email, $pwd,$statut, $dateInscrip);
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->city = $city;
    }
}