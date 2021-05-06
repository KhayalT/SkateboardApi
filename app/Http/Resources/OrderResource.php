<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'product'=>$this->product->skateboard_name,
            'color'=>$this->color->name,
            'amount'=>$this->amount,
            'custom_print_photo'=>$this->custom_print_photo ? $this->custom_print_photo : "There is no photo",
            'email'=>$this->email ? $this->email : "There is no email",
            'phone_number'=>$this->phone_number ? $this->phone_number : "There is no phone number",
            'address'=>$this->address,
            'created_at'=>$this->created_at->toDateTimeString(),
            'updated_at'=>$this->updated_at->toDateTimeString(),
        ];
    }
}
