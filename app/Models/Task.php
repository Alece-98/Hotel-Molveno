<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Task extends Model
{
    use HasFactory;

    abstract public function getComment(): ?string;
    abstract public function setComment(?string $comment): void;
    abstract public function getDateStart(): string;
    abstract public function getDateEnd(): string;
    abstract public function setDateStart(string $dateStart): void;
    abstract public function setDateEnd(string $dateEnd): void;
    
}
