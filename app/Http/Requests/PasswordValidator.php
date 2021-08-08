<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordValidator extends FormRequest
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
        $rules = [
            'password_confirmation' => ['required_with:password|same:password|min:6'],
            'password' => [
                'required'
            ]
            ];
        return $rules;

    }
    public function messages()
    {
        $msg = [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'vat_number' => 'max:13',
            'password' => 'required|confirmed|min:6',
        ];
        return $msg;
    }
}
