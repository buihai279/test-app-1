<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(

        )
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
                'txtNameProduct'
                => 'required|min:3|max:100',
                'txtDescription'=> 'required|min:3|max:300',
                'txtPrice'=> 'required|numeric|digits_between:1,10',
                'filePhoto' => 'required|image | max:10240',
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
            'txtNameProduct.required' => "The <b class='text-success'>Name product</b> is required.",
            'txtNameProduct.min' => "The <b class='text-success'>Name product</b> product must be at least 3 characters.",
            'txtNameProduct.max' => "The <b class='text-success'>Name product</b> product may not be greater than 100 characters.",
            
            'txtDescription.required' => "The <b class='text-success'>Description</b> is required.",
            'txtDescription.min' => "The <b class='text-success'>Description</b> product must be at least 3 characters.",
            'txtDescription.max' => "The <b class='text-success'>Description</b> product may not be greater than 300 characters.",
            
            'txtPrice.required' => "The <b class='text-success'>Price</b> is required.",
            'txtPrice.digits_between' => "The <b class='text-success'>Price</b> must be between 1 and 10 digits.",
            'txtPrice.numeric' => "The <b class='text-success'>Price</b> must be a number.",

            'filePhoto.required' => "The <b class='text-success'>Photo</b> is required.",
            'filePhoto.image' => "The <b class='text-success'>Photo</b> is must be an image.",
            'filePhoto.max' => "The <b class='text-success'>Photo</b> may not be greater than 10240 kilobytes(10MB).",

        ];
    }
}

?>

