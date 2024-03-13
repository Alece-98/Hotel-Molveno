<?php

namespace App\Classes;

use App\Models\User;

abstract class Employee extends User implements IPerson
{
    private string $firstName;
    private string $lastName;
    private string $uuid;

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName(string $firstName){

    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName(){

    }

    public function getUUID(){
        return $this->uuid;
    }

    public function setUUID(){
        
    }
}
