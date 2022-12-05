<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'string|min:3|max:70',
            'raw_material'=> 'string|min:3|max:220',
            'price'=> 'required',
            'food_type'=> 'required',
            'food_discount_id'=> 'nullable',
            'food_party_id'=> 'nullable',
        ];
    }
}
