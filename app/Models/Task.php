<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Task extends Model
{
    use HasFactory;

    abstract public function getComments(): array;
    abstract public function getDateInterval(): string;
    
}
