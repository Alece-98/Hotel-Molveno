<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Task extends Model
{
    use HasFactory;

    abstract public function getComments(): array;
    abstract public function getDateStart(): DateTime;
    abstract public function getDateEnd(): DateTime;
    abstract public function setDateStart(DateTime $dateStart): bool;
    abstract public function setDateEnd(DateTime $dateEnd): bool;
    
}
