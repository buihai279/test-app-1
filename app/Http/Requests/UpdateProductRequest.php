<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
                'txtNameProduct'=> 'required|min:2|max:100',
                'txtDescription'=> 'required|min:2|max:300',
                'txtPrice'=> 'required|numeric|digits_between:1,10',
                'filePhoto' => 'image | max:10240',
            ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'txtNameProduct.required' => "<b class='text-success'>Name product</b> is required",
            // 'body.required'  => 'A message is required',
        ];
    }
}
