<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    
    public function index(){
        return Receta::whith('categoria', 'etiquetas', 'user')->get();
    }

    public function store(){}

    public function show(Receta $receta){
        return $receta->load('categoria', 'etiquetas', 'user');
    }

    public function update(){}

    public function destroy(){}
}
