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
                'name'=> 'required|min:2|max:100',
                'avatar' => 'required|image | max:10240',
                'email' => 'required|email',
                'email' => 'unique:users,email',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required',
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
            'txtNameProduct' => '<b>Name product</b> is required',
            // 'body.required'  => 'A message is required',
        ];
    }
}
?>
