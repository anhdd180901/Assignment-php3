<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoomValidator extends FormRequest
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
            "room_no" => [
                "required",
                Rule::unique('rooms')->ignore($this->id)
            ],
            'floor' => [
                "numeric",
                "min:1"
            ],
            'image' => [
                'required',
                "mimes:jpg,bmp,png"
            ],
            'price' => [
                "numeric",
                "min:0"
            ],
            'detail' => ['required']
        ];
        return $rules;
    }

    public function messages()
    {
        $msg = [
            'room_no.required' => 'Không được để trống',
            'room_no.unique' => 'ten da co',
            'floor.required' => 'Không được để trống',
            'price.required' => 'Không được để trống',
            'image.required' => 'Không được để trống',
            'detail.required' => 'Không được để trống',
        ];
        return $msg;
    }
}
