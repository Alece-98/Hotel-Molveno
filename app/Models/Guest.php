<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\IPerson;

class Guest extends Model implements IPerson

{
    private string $firstName;
    private string $lastName;
    private string $phoneNumber;
    private string $email;
    private string $streetName;
    private int $houseNumber;
    private string $houseNumberAddition;
    private string $city;
    private string $zipcode;
    private string $country;


    //Table name for database
    protected $table = 'guest';


    public function __construct(){
        #UUID Method here
    }

    public function getFirstName(): string {

        return $this->attributes['first_name'];
    }

    public function getLastName(): string {
        return $this->attributes['last_name'];

    }

    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    public function getEmail(): string {

        return $this->attributes['email'];

    }

    public function getStreetName(): string {
        return $this->streetName;
    }

    public function getHouseNumber(): int {
        return $this->houseNumber;
    }

    public function getHouseNumberAddition(): ?string {
        return $this->houseNumberAddition;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function getZipcode(): string {
        return $this->zipcode;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setPhoneNumber(string $phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setStreetName(string $streetName): void {
        $this->streetName = $streetName;
    }

    public function setHouseNumber(int $houseNumber): void {
        $this->houseNumber = $houseNumber;
    }

    public function setHouseNumberAddition(?string $houseNumberAddition): void {
        if (is_null($houseNumberAddition)){
            $houseNumberAddition = "";
        }
        $this->houseNumberAddition = $houseNumberAddition;
    }

    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function setZipcode(string $zipcode): void {
        $this->zipcode = $zipcode;
    }

    public function setCountry(string $country): void {
        $this->country = $country;
    }
}

