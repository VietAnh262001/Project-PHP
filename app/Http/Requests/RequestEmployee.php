<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEmployee extends FormRequest
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
           'name'=>'required',
            'image'=>'required',
            'status'=>'required',
            'description'=>'required'
        ];
    }
    public function messages(){
        return [
            "name.required"=>'Please enter this case !',
            "image.required"=>'Please enter this case !',
            "status.required"=>'Please enter this case !',
            "description.required"=>'Please enter this case !'
        ];
    }
}
