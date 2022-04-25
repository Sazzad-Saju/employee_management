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
            'tt_url' => ['nullable','regex:/^(http(s?):\/\/)?(www\.)?github\.([a-z])+\/([A-Za-z0-9]{1,})+\/?$/i'],
            'dob'=> 'date|before:today',
            'gender'=> 'required|in:Male,Female',
            'blood_group_id' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'profile_image' => 'image|mimes:jpeg,jpg,png',
        ];

    }
    // custom validation error message
    public function messages(){
        return[
        'name.required'=> 'Must have a name!',
        'dob.before' => 'Invalid date',
        'phone.regex','office_phone.regex' => 'Must be a valid BD number',
        'tt_url.regex' => 'The github profile url format is invalid.',
        ];
    }
}
