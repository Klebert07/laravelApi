<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquteaController extends Controller
{
    public function index(){
        return Etiqueta::with('recetas')->get();

    }
    public function show(Etiqueta $etiqueta){
        return $etiqueta->load('recetas');
    }
}
