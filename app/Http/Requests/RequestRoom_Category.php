<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRoom_Category extends FormRequest
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
            'cat_name'=>'required',
            'cat_slug'=>'required',
            'image'=>'required',
            'status'=>'required',
            'meta_title'=>'required',
            'meta_descript'=>'required',
            'prioty'=>'required',
            'meta_keyword'=>'required'
        ];
    }
    public function messages(){
        return [
            "cat_name.required"=>'Please enter this case !',
            "cat_slug.required"=>'Please enter this case !',
            "image.required"=>'Please enter this case !',
            "status.required"=>'Please enter this case !',
            "meta_title.required"=>'Please enter this case !',
            "meta_descript.required"=>'Please enter this case !',
            "prioty.required"=>'Please enter this case !',
            "meta_keyword.required"=>'Please enter this case !'
        ];
    }
}
