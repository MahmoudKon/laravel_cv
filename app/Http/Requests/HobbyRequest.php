<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HobbyRequest extends FormRequest
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
            'hobbyname'  => 'required|string|min:3|max:20',
            'icon'       => 'required|string|min:2|max:15',
            'user_id'    => 'exists:users,id',
        ];
    }
}
