<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterScheduleRequest extends FormRequest
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
            'phone_number' =>'required|max:10|min:10',
            'sex' =>'required',
            'service_id' =>'required',
            'date' =>'required',
            'time_id' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'phone_number.required' =>'Bạn chưa điền thông tin',
            'sex.required' =>'Bạn chưa điền thông tin',
            'service_id.required' =>'Bạn chưa điền thông tin',
            'date.required'=>'Bạn chưa điền thông tin',
            'time_id.required'=>'Bạn chưa điền thông tin',
        ];
    }
}
