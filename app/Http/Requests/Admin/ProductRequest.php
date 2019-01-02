<?php

namespace Food\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required|unique:products',
            'category_id'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            
        ];
    }
    public function messages()
    {
        return [
         'name.unique' => 'Tên này đã tồn tại',
         'name.required' => 'Chưa nhập tên sản phẩm',
         'category_id.required'=>'Chưa chọn danh mục',
         'quantity.required'=>'phải nhập số lượng',
         'price.required'=>'vui lòng nhập giá sản phẩm',
        
        ];
    }
}
