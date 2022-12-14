<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
            'first_name' => 'required|string|max:200',
            'last_name' => 'required|string',
            'place_of_birth' => 'required|string',
            'gender' => 'required|string',
            'birthday' => 'required|string',
            'biography' => 'required|string',
        ];
    }
}
