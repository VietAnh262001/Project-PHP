<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestuser extends FormRequest
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
            'user_name' => 'required|min:3',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:4|max:32',
            'authenticationpassword' => 'required|same:password',
            'phone' =>'required',
            'address' =>'required'
        ];
    }
    public function messages(){
        return [
           'user_name.required' => 'You have not entered your username',
            'user_name.min' => 'Username must be at least 3 characters',
            'email.required' => 'You have not entered your email',
            'email.email' => 'Enter the correct email format',
            'email.unique' => 'Email already exists',
            'password.required' => 'You have not entered your password',
            'password.min' => 'Password must be at least 4 characters',
            'password.max' => 'Password up to 32 characters',
            'authenticationpassword.required' => 'Enter the password',
            'authenticationpassword.same' => 'password incorrect',
            'phone.required' => 'You have not entered your password',
            'address.required' => 'You have not entered your password'
        ];
    }
}
