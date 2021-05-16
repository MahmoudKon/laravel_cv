<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'username'  => "required|string|min:5|max:10|unique:users,username,{$this->user->id}",
            'email'     => "required|email|unique:users,email,{$this->user->id}",
            'password'  => 'confirmed',
            'approve'   => 'between:0,1',
            'image'     => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        ];
    }
}
