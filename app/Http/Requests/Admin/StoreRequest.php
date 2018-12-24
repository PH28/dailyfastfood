<?php

namespace Food\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'max:255',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|min:10|max:11',
            'address' => 'required|max:255',
            'avatar' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'first_name'=>'chưa nhập first name',
            'first_name.max' => 'Vượt quá 255 kí tự',
            'email.reqiured' => 'Vui lòng nhập Email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'phone.min' => 'Tối thiểu 10 kí tự',
            'phone.max' => 'vui lòng nhập số điện thoại',
            'address.max' => 'Vượt quá 255 kí tự',
        ];
    }
}
