<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestblog extends FormRequest
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
            'blog_name'=>'required',
            'blog_slug'=>'required',
            'image'=>'required',
            'summary'=>'required',
            'content'=>'required',
            'status'=>'required',
            'meta_key'=>'required',
            'meta_title'=>'required',
            'meta_descript'=>'required'
        ];
    }
    public function messages(){
        return [
            "blog_name.required"=>'Please enter this case !',
            "blog_slug.required"=>'Please enter this case !',
            "image.required"=>'Please enter this case !',
            "summary.required"=>'Please enter this case !',
            "content.required"=>'Please enter this case !',
            "status.required"=>'Please enter this case !',
            "meta_key.required"=>'Please enter this case !',
            "meta_title.required"=>'Please enter this case !',
            "meta_descript.required"=>'Please enter this case !'
        ];
    }
}
