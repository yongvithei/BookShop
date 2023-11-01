<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'short_desc' => $this->short_desc,
            'thumbnail' => '/' .$this->thumbnail,
            'pro_code' => $this->pro_code,
            'price' => $this->price,
            'pro_qty' => $this->pro_qty,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}
