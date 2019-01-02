<?php

namespace Food\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
            'percent_discount' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'product_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'percent_discount.required' => 'Please input percent discount',
            'product_id.required' => 'Please select discount products'
        ];
    }
}
