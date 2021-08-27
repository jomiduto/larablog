<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'title' => 'required|min:5|max:500',
            'url_clean' => 'required|min:5|max:500'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo :attribute es requerido',
            'url_clean.required' => 'El campo :attribute es requerido',
            'title.min' => 'El campo :attribute debe tener al menos 5 caracteres',
            'url_clean.min' => 'El campo :attribute debe tener al menos 5 caracteres'
        ];
    }
}
