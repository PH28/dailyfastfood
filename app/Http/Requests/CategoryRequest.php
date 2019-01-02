<?php

namespace Food\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|min:2|unique:categories,name',
            'parent_id' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter category name',
            'name.min' => 'Category name min 2 characters',
            'name.unique' => 'Category name already exists'
        ];
    }
}
