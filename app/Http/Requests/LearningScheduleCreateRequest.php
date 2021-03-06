<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class LearningScheduleCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|unique:learning_schedules',
            'subject' => 'required',
            'schedule_day' => 'required',
            'schedule_time' => 'required',
            'schedule_time_end' => 'required',
            'enrollment_key' => 'required|unique:learning_schedules',
            'class_room' => 'required',
        ];

    }

}
