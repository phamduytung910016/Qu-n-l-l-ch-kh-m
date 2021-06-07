<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'phone_number' => 'required|max:10|min:10',
            'sex' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập họ tên',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã sử dụng',
            'email.email' => 'Email chưa đúng định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'confirm_password.required' => 'Bạn chưa nhập lại mật khẩu',
            'confirm_password.same' => 'Mật khẩu không khớp',
            'phone_number.required' => 'Bạn chưa điền thông tin',
            'phone_number.min:10' => 'Số điện thoại không hợp lệ',
            'phone_number.max:10' => 'Số điện thoại không hợp lệ',
            'sex.required' => 'Bạn chưa điền thông tin',
        ];
    }
}
