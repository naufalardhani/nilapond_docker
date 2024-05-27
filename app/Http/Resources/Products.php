<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Products extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'photo_url' => $this->photo_url,
            'photo_name' => $this->photo_name,
            'price' => $this->price,
            'stock' => $this->stock,
            'is_active' => $this->is_active,
            'description' => $this->description,
        ];
    }
}
