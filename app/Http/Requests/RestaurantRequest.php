<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'address' => 'string|min:10|max:270',
            'longitude' => 'required',
            'latitude' => 'required',
            'restaurant_type' => 'required',
            'is_open' => 'nullable',
            'score' => 'nullable',
        ];
    }
}
