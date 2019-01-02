<?php

namespace Food\Http\Requests;

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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'dob' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|min:10',
            'address' => 'required|max:255',
            'avatar' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please enter first name',
            'first_name.max' => 'Max 255 characters',
            'last_name.required' => 'Please enter last name',
            'last_name.max' => 'Max 255 characters',
            'email.reqiured' => 'Please enter email address',
            'email.email' => 'Incorrect email format',
            'email.unique' => 'Email already exists',
            'password.required' => 'Please enter password',
            'password.confirmed' => 'Confirm password is invalid',
            'phone.min' => 'Min 10 characters',
            'address.max' => 'Max 255 characters'
        ];
    }
}
