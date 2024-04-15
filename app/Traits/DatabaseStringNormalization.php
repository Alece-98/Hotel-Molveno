<?php

namespace App\Traits;

trait DatabaseStringNormalization {
    //Zorgt ervoor dat de string altijd begint met een hoofdletter en de rest een kleine letter bevat
    //Niet gebruiken voor tekst die niet geinterpreteerd hoeft te worden
    public function normalizeStringFromDatabase(string $string){
        return ucfirst(strtolower($string));
    }
}