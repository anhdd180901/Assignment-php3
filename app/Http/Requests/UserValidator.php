<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserValidator extends FormRequest
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
            'name' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'password' => [
                'required'
            ]
        ];
        return $rules;
    }
    public function messages()
    {
        $msg = [
            'name.required' => 'Không được để trống',
            'name.unique' => 'Tên đã có',
            'email.required' => "Thiếu ảnh bạn ei"
        ];
        return $msg;
    }
}
