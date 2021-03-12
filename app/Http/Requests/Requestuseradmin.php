<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestuseradmin extends FormRequest
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
           'admin_email'=>'required',
           'admin_password'=>'required',
           'admin_name'=>'required',
           'admin_phone'=>'required'
       ];
   }
   public function messages(){
    return [
        "admin_email.required"=>'Please enter this case !',
        "admin_password.required"=>'Please enter this case !',
        "admin_name.required"=>'Please enter this case !',
        "admin_phone.required"=>'Please enter this case !'
    ];
}
}
