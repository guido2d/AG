<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscriptor;
use App\Exports\SuscriptoresExport;
use Maatwebsite\Excel\Facades\Excel;

class SuscriptoresController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function listSuscriptores(){
        $suscriptores = Suscriptor::orderBy('id', 'desc')->paginate(15);
        return view('admin.suscriptores', compact('suscriptores'));
    }

    public function descargarListado(){
        return Excel::download(new SuscriptoresExport, 'suscriptores.xlsx');
    }
}
