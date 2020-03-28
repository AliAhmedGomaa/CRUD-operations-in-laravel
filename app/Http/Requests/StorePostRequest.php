<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'name' => 'required|min:3',
            'Description' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
                'name.min' => 'Please the title has minimum of 3 chars',
                'name.required' => 'Please enter the title field'
            ];
    }
}
