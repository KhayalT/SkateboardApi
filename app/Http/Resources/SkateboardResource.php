<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkateboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'skateboard_name' => $this->skateboard_name,
            'type' => $this->type->name,
            'price' => $this->price . " AZN",
            'colors'=>$this->colors->count()>0 ? $this->colors : 'There is no color,Sorry!',
            'print_price' => $this->print_price ? $this->print_price : "This skateboard hasn't any print price",
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
