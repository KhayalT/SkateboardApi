<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id'=>'required|exists:skateboards,id',
            'color_id'=>'required|exists:colors,id',
            'amount'=>'required|numeric|between:1,10',
            'custom_print_photo'=>'image|mimes:jpg,jpeg,png|max:2048',
            'email'=>'required_without:phone_number|email',
            'phone_number'=>'required_without:email',
            'address'=>'required'
        ];
    }
}
