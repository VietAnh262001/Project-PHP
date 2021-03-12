<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestservice extends FormRequest
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
           'sv_name'=>'required',
           'price'=>'required',
           'image'=>'required',
           'descript'=>'required'
       ];
   }
   public function messages(){
    return [
        "sv_name.required"=>'Please enter this case !',
        "price.required"=>'Please enter this case !',
        "image.required"=>'Please enter this case !',
        "descript.required"=>'Please enter this case !'
    ];
}
}
