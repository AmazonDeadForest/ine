<?php

namespace App\Http\Controllers;

use App\Imports\ActividadImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Actividad;
use Maatwebsite\Excel\Facades\Excel;


class ActividadController extends Controller
{
    public function importExcel(Request $request) {
        $file = $request->file('file');

        Excel::import(new ActividadImport, $file);

        return redirect()->route('actividades')
            ->with('status_success','Se han importado los registros satisfactoriamente');
    }
}
