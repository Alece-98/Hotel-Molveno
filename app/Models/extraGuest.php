<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class extraGuest extends Model
{
    // use HasFactory;

    protected $table = 'guests';

    public function getExtraGuestName(): string {
        return $this->attributes['first_name'];
    }
    public function getExtraGuestLastName(): string {
        return $this->attributes['last_name'];
    }
    public function getExtraGuestPhone(): string {
        return $this->attributes['phone'];
    }
    public function getExtraGuestEmail(): string {
        return $this->attributes['email'];
    }
    public function getExtraGuestAdress(): string {
        return $this->attributes['adress'];
    }
    public function getExtraGuestHouseNumber(): int {
        return $this->attributes['house_number'];
    }
    public function getExtraGuestCity(): string {
        return $this->attributes['city'];
    }
    public function getExtraGuestZipcode(): string {
        return $this->attributes['zipcode'];
    }
    public function getExtraGuestCountry(): string {
        return $this->attributes['country '];
    }

    public function setExtraGuestName(string $extraFirstName): string {
        return $this->attributes['first_Nname'] = $extraFirstName;
    }
    public function setExtraGuestLastName(string $extraLastName): string {
        return $this->attributes['last_name'] = $extraLastName;
    }
    public function setExtraGuestEmail(string $extraGuestEmail): string {
        return $this->attributes['guest_email'] = $extraGuestEmail;
    }
    public function setExtraGuestAdress(string $extraGuestAdress): string {
        return $this->attributes['guest_adress'] = $extraGuestAdress;
    }
    public function setExtraHouseNumber(int $extraGuestHouseNumber): int {
        return $this->attributes['house_number'] = $extraGuestHouseNumber;
    }

    public function setExtraGuestCity(string $extraGuestCity): string {
        return $this->attributes['city'] = $extraGuestCity;
    }
    public function setExtraGuestZipcode(string $extraGuestZipcode): string {
        return $this->attributes['zipcode'] = $extraGuestZipcode;
    }
    public function setExtraGuestCountry(string $extraGuestCountry): string {
        return $this->attributes['country'] = $extraGuestCountry;
    }

    public function reservationTask(): BelongsToMany {
        return $this->belongsToMany(ReservationTask::class, "guests_reservations", "guest_id");

    }
}
