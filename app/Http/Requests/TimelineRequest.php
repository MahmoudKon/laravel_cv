<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimelineRequest extends FormRequest
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
            'start_date'   => 'required|date|before:end_date|before:today',
            'end_date'     => 'required|date|after:start_date|before:today',
            'degree'       => 'required|string|min:5|max:20',
            'place'        => 'required|string|min:5|max:25',
            'description'  => 'required|string|min:10|max:255',
            'user_id'      => 'exists:users,id',
        ];
    }
}
