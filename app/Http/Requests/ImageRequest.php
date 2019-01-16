<?php

namespace Food\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'product_id' => 'required',
            'images' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please input name',
            'product_id.required' => 'Please select products',
            'images.required' => 'Please choose file'
        ];
    }
}
