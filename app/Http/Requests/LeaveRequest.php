<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LeaveRequest extends FormRequest
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
            'leave_type_id' => 'required',
            'submission_type' => [
                'required',
                Rule::in(['Pre', 'Post']),
            ],
            'start_date' => $this->submission_type === 'Pre'? 'required|date|after_or_equal:today':'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'recommend_employee_id'=> 'required',
            'reason' => 'required',

        ];
    }
}
