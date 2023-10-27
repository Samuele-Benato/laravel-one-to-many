<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // ...
            'type_id' => ['nullable', 'exists:types,id']
        ];
    }
    public function messages()
    {
        return [
            'type_id.exists' => 'Il tipo inserito non è valido'
        ];
    }
}