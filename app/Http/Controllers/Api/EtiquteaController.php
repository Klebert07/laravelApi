<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

use App\Http\Resources\EtiquetaResource;

class EtiquteaController extends Controller
{
    public function index(){
        return  EtiquetaResource::collection(Etiqueta::with('recetas.categoria', 'recetas.etiquetas', 'recetas.user')->get());

    }
    public function show(Etiqueta $etiqueta){
        return new EtiquetaResource($etiqueta->load('recetas'));
    }
}
