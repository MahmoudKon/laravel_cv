<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            // Main User Informations
            'username'  => "required|string|min:5|max:10|unique:users,username,{$this->user_id}",
            'email'     => "required|email|unique:users,email,{$this->user_id}",
            'password'  => 'confirmed',
            'image'     => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            // All User Informations
            'website'   => "required|string|min:10|max:100|unique:generals,website,{$this->general_id}",
            'phone'     => "required|between:10,20|unique:generals,phone,{$this->general_id}",
            'fullname'  => 'required|string|min:5',
            'job'       => 'required|string|min:3',
            'gender'    => 'required|in:male,female',
            'address'   => 'required|string|min:5',
            'birthday'  => 'required|before:today',
            'about'     => 'required|string|min:10',
            'awards'    => 'required|string|min:10',
            'user_id'   => 'exists:users,id',
            // Skills User
            'skillname.*'  => 'required|string|min:3|max:20',
            'level.*'      => 'required|integer|between:1,5',
            // Hobbies User
            'hobbyname.*'  => 'required|string|min:3|max:20',
            'icon.*'       => 'required|string|min:2|max:15',
            // Timelines
            'start_date.*'   => 'required|date|before:end_date|before:today',
            'end_date.*'     => 'required|date|after:start_date|before:today',
            'degree.*'       => 'required|string|min:5|max:20',
            'place.*'        => 'required|string|min:5|max:25',
            'description.*'  => 'required|string|min:10|max:255',
        ];
    }
}
