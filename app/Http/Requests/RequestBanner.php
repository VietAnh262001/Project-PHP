<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBanner extends FormRequest
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
            'banner_name'=>'required',
            'banner_link'=>'required',
            'banner_image'=>'required',
            'banner_prioty'=>'required',
            'banner_position'=>'required',
            'status'=>'required',
            'banner_descript'=>'required'
        ];
    }
    public function messages(){
        return [
            "banner_name.required"=>'Please enter this case !',
            "banner_link.required"=>'Please enter this case !',
            "banner_image.required"=>'Please enter this case !',
            "banner_prioty.required"=>'Please enter this case !',
            "banner_position.required"=>'Please enter this case !',
            "status.required"=>'Please enter this case !',
            "banner_descript.required"=>'Please enter this case !'
        ];
    }
}
