<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'specie' => 'required|min:3',
            'scientific_name' => 'required|min:5',
            'image_url' =>'required|url',
            'description' => 'required|min:50',
            'animal_class_id' => 'required'
        ];
    }
}
