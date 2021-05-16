<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
            'username'  => 'required|string|min:5|max:10|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed|between:3,15|string',
            'image'     => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'approve'   => 'between:0,1',
        ];
    }
}
