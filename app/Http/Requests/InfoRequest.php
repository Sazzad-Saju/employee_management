<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

class InfoRequest extends FormRequest
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
            'name'=>'required|string',
            'phone'=> ['required', 'regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'personal_email'=> 'email',
            'office_email' => 'required|email',
            'office_phone' => ['regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'dob'=> 'date|before:today',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'salary' => 'numeric|min:5000',
            'nid_number' => ['numeric','required','regex:/(?:\d{17}|\d{13}|\d{10})/'],
            'emergency_contact_person' => 'required',
            'emergency_contact_phone' => ['regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'],
        ];
    }
    public function messages(){
        return[
        'name.required'=> 'Must have a name!',
        'dob.before' => 'Invalid date',
        'salary.min' => 'Salary range started from 5k',
        'phone.regex','office_phone.regex','emergency_contact_phone.regex' => 'Must be a valid BD number',
        ];
    }
}
