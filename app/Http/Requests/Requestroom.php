<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestroom extends FormRequest
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
           'room_name'=>'required',
            'image'=>'required',
            'price'=>'required',
            'content'=>'required',
            'descript'=>'required',
            'area'=>'required',
            'bed'=>'required',
            'bath'=>'required'
        ];
    }
    public function messages(){
        return [
            "room_name.required"=>'Please enter this case !',
            "image.required"=>'Please enter this case !',
            "price.required"=>'Please enter this case !',
            "content.required"=>'Please enter this case !',
            "descript.required"=>'Please enter this case !',
            "area.required"=>'Please enter this case !',
            "bed.required"=>'Please enter this case !',
            "bath.required"=>'Please enter this case !'
        ];
    }
}
