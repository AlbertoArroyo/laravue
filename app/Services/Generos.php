<?php

namespace App\Services;

use App\Genero;

class Generos
{
    public function get()
    {
        $generos = Genero::get();
        $generosArray[''] = 'Selecciona un género';
        foreach ($generos as $genero) {
            $generosArray[$genero->id_sn_genero] = $genero->sn_descripcion;
        }
        return $generosArray;
    }
}