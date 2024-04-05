<?php

namespace App\Models;

use App\Models\DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Task extends Model
{
    use HasFactory;

    abstract public function getComment(): ?string;
    abstract public function getDateStart(): DateTime;
    abstract public function getDateEnd(): DateTime;
    abstract public function setDateStart(DateTime $dateStart): void;
    abstract public function setDateEnd(DateTime $dateEnd): void;
    
}
