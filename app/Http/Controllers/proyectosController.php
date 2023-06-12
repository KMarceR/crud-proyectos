<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class proyectosController extends Controller
{
    public function index()
    {
        $datos = DB::select("SELECT * FROM proyecto");
        return view("welcome")->with("datos", $datos);
    }

    public function create(Request $request)
    {
        return $request->txtNombre;
    }
}
