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

        $id =auth('employee')->user()->id;
        return [
            /* Personal Info validation */
            'name'=>'required|string',
            'phone'=> ['required', 'regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'personal_email'=> "email|unique:employees,personal_email,{$id}",
            'office_email' => "required|email|unique:employees,office_email,{$id}",
            'office_phone' => ['regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'fb_url'=>['nullable','regex:/(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?/'],
            'li_url'=>'nullable',
            'tt_url' => 'nullable',
            'dob'=> 'date|before:today',
            'gender'=> 'required|in:Male,Female',
            'blood_group_id' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'profile_image' => 'image|mimes:jpeg,jpg,png',

            /* Important Info validation */
            'department_id' => 'required',
            'designation_id' => 'required',
            'salary' => 'numeric|min:5000',
            'join_date' => 'date',
            'quit_date' => 'nullable|date|after: join_date',
            'is_current_employee' => 'sometimes|in: 1:0',
            'is_provision_period' => 'sometimes|in:1:0',
            'certificate_image' => 'image|mimes:jpeg,jpg,png',
            'nid_image' => 'image|mimes:jpeg,jpg,png',
            'nid_number' => ['numeric','required','regex:/(?:\d{17}|\d{13}|\d{10})/'],

            // Emergency Info validation
            'emergency_contact_person' => 'required',
            'emergency_contact_phone' => ['regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'emergency_contact_relation' => 'string',
            'emergency_contact_address' => 'string',

            // security update validation
            'pass' => 'sometimes|nullable|min:8',
            'new_pass' => 'sometimes|nullable|min:8|different:pass|same:repeat_new',
            'repeat_new' => 'sometimes|nullable|min:8|same:new_pass',
        ];

    }
    // custom validation error message
    public function messages(){
        return[
        'name.required'=> 'Must have a name!',
        'dob.before' => 'Invalid date',
        'salary.min' => 'Salary range started from 5k',
        'phone.regex','office_phone.regex','emergency_contact_phone.regex' => 'Must be a valid BD number',
        'new_pass.different'=> 'New Password must be different',
        'repeat_new.same' => 'This field have to match with new password',
        'new_pass.same' => 'New password must be confirmed',
        ];
    }
}
