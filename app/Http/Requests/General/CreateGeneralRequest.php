<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class CreateGeneralRequest extends FormRequest
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
            'website'   => "required|string|min:10|max:100|unique:generals",
            'phone'     => "required|between:10,20|unique:generals",
            'fullname'  => 'required|string|min:5',
            'job'       => 'required|string|min:3',
            'gender'    => 'required|in:male,female',
            'address'   => 'required|string|min:5',
            'birthday'  => 'required|before:today',
            'about'     => 'required|string|min:10',
            'awards'    => 'required|string|min:10',
            'user_id'   => 'exists:users,id',
        ];
    }
}
