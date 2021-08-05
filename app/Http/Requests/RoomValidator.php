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
            'floor'=> ['required'],
            'image'=> ['required'],
            'price'=> ['required'],
            'detail'=> ['required']
        ];
        return $rules;
    }

    public function messages()
    {
        $msg = [
            'room_no.required'=> 'ko dc de trong',
            'room_no.unique'=> 'ten da co',
            'floor.required'=> 'ko dc de trong',
            'price.required'=> 'ko dc de trong',
            'image.required'=> 'ko dc de trong',
            'detail.required'=> 'ko dc de trong',
        ];
        return $msg;
    }
}
