<?php

namespace App\Http\Resources;

use App\Models\Receta;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class CategoriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this ->id,
            'tipo' => 'categoria',
            'atributos' => [
                'nombre' => $this->nombre,
            ],
            'relaciones' => [
                'recetas' => RecetaResource::collection($this->recetas),
            ]
        ];
    }
}
