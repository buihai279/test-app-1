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
                'name' => 'required|max:100',
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
            'name.required' => "The <b class='text-success'>Name </b> is required",
            'name.max' => "The <b class='text-success'>Name </b> max 100 alphabetic characters",

            'avatar.required' => "The <b class='text-success'>Avatar</b> is required.",
            'avatar.image' => "The <b class='text-success'>Avatar</b> is must be an image.",
            'avatar.max' => "The <b class='text-success'>Avatar</b> may not be greater than 10240 kilobytes(10MB).",

            'email.required' => "The <b class='text-success'>Email</b> is required.",
            'email.unique' => "The <b class='text-success'>Email</b> exits.",
        
            'password.required' => "The <b class='text-success'>Password</b> is required.",
            'password.min' => "The <b class='text-success'>Password</b> min 6 characters.",
            'password_confirmation.required' => "The <b class='text-success'>Password confirm</b> is required.",
            'password.confirmed' => "The <b class='text-success'>Password confirm</b> not match.",

        ];
    }
}
