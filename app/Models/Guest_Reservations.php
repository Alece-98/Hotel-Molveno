<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest_Reservations extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'guests_reservations';
}
