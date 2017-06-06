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
                'txtPrice'=> 'required|min:0|max:10000000|numeric',
                'filePhoto' => 'required',
            ];
    }
}
