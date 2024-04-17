<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class extraGuest extends Model
{
    // use HasFactory;
    // protected $table = 'extra_Guest';

    public function getExtraGuestName(): string {
        return $this->attributes['extra_First_Name'];
    }
    public function getExtraGuestLastName(): string {
        return $this->attributes['extra_Last_Name'];
    }
    public function getExtraGuestPhone(): string {
        return $this->attributes['extra_Phone'];
    }
    public function getExtraGuestEmail(): string {
        return $this->attributes['extra_Email'];
    }
    public function getExtraGuestAdress(): string {
        return $this->attributes['extra_Adress'];
    }
    public function getExtraGuestHouseNumber(): int {
        return $this->attributes['extra_House_number'];
    }
    public function getExtraGuestCity(): string {
        return $this->attributes['extra_City'];
    }
    public function getExtraGuestZipcode(): string {
        return $this->attributes['extra_Zipcode'];
    }
    public function getExtraGuestCountry(): string {
        return $this->attributes['extra_Country '];
    }

    public function setExtraGuestName(string $extraFirstName): string {
        return $this->attributes['extra_First_Name'] = $extraFirstName;
    }
    public function setExtraGuestLastName(string $extraLastName): string {
        return $this->attributes['extra_Last_Name'] = $extraLastName;
    }
    public function setExtraGuestEmail(string $extraGuestEmail): string {
        return $this->attributes['extra_Guest_Email'] = $extraGuestEmail;
    }
    public function setExtraGuestAdress(string $extraGuestAdress): string {
        return $this->attributes['extra_Guest_Adress'] = $extraGuestAdress;
    }
    public function setExtraHouseNumber(int $extraGuestHouseNumber): int {
        return $this->attributes['extra_House_Number'] = $extraGuestHouseNumber;
    }

    public function setExtraGuestCity(string $extraGuestCity): string {
        return $this->attributes['extra_City'] = $extraGuestCity;
    }
    public function setExtraGuestZipcode(string $extraGuestZipcode): string {
        return $this->attributes['extra_Zipcode'] = $extraGuestZipcode;
    }
    public function setExtraGuestCountry(string $extraGuestCountry): string {
        return $this->attributes['extra_Country'] = $extraGuestCountry;
    }
}
