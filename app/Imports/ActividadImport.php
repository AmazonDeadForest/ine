<?php

namespace App\Imports;

use App\Models\Actividad;
use Maatwebsite\Excel\Concerns\ToModel;

class ActividadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Actividad([
            'id' => $row[0], 
            'nombre' => $row[1], 
            'objetivo' => $row[2],
            'periodicidad' => $row[3],
            'producto' => $row[4],
            'hora' => $row[5],
            'volumen' => $row[6],
            'personas' => $row[7],
            'total' => $row[8],
            'cargo' => $row[9], 
            'fechaInicio' => $row[10], 
            'fechaTermino' => $row[11], 
            'unidad' => $row[12]
        ]);
    }
}
