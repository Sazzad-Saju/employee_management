<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'new_pass' => 'required|min:8',
            'repeat_new' => 'required|min:8|same:new_pass',
        ];
    }
    public function message()
    {
        return [
            'repeat_new.same' => 'The new password must be confirmed',
        ];
    }
}
