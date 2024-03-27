<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\IPerson;
use Illuminate\Database\Eloquent\Relations;

class Guest extends Model implements IPerson
{
    //Table name for database
    protected $table = 'guests';
    private int $amountOfPeople = 0;

    public function getFirstName(): string {
        return $this->attributes['first_name'];
    }

    public function getLastName(): string {
        return $this->attributes['last_name'];
    }

    public function getPhoneNumber(): string {
        return $this->attributes['phone'];
    }

    public function getEmail(): string {
        return $this->attributes['email'];
    }

    public function getStreetName(): string {
        return $this->attributes['street_name'];
    }

    public function getHouseNumber(): int {
        return $this->attributes['house_number'];
    }

    public function getCity(): string {
        return $this->attributes['city'];
    }

    public function getZipcode(): string {
        return $this->attributes['zipcode'];
    }

    public function getCountry(): string {
        return $this->attributes['country'];
    }

    public function getAmountOfPeople(): int{
        return $this->amountOfPeople();
    }

    public function setFirstName(string $firstName): void {
        //$this->setAttributeAndReplaceIfEmptyString('first_name', $firstName);
        $this->attributes['first_name'] = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->attributes['last_name'] = $lastName;
    }

    public function setPhoneNumber(string $phoneNumber): void {
        $this->attributes['phone'] = $phoneNumber;
    }

    public function setEmail(string $email): void {
        $this->attributes['email'] = $email;
    }

    public function setStreetName(string $streetName): void {
        $this->attributes['street_name'] = $streetName;
    }

    public function setHouseNumber(int $houseNumber): void {
        $this->attributes['house_number'] = $houseNumber;
    }

    public function setCity(string $city): void {
        $this->attributes['city'] = $city;
    }

    public function setZipcode(string $zipcode): void {
        $this->attributes['zipcode'] = $zipcode;
    }

    public function setCountry(string $country): void {
        $this->attributes['country'] = $country;
    }

    public function setPeople(int $people): void{
        $this->people = $people;
    }

    public function reservationTask(): BelongsToMany {
        return $this->belongsToMany(ReservationTask::class);
    }

    //Deze functie werkt nog niet helemaal naar behoren
    private function setAttributeAndReplaceIfEmptyString(string $attribute, mixed $variable){
        $attributeValue = $this->attributes[$attribute];
        if (empty($attributeValue)){
            $this->attributes[$attribute] = 'unknown';
        }
        else{
            $this->attributes[$attribute] = $variable;
        }
    }

    private function setAttributeAndReplaceIfEmptyInt(string $attribute, mixed $variable){
        if (empty($attribute)){
            $this->attributes[$attribute] = '-1';
        }
        else{
            $this->attributes[$attribute] = $variable;
        }
    }
}

