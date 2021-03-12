<?php

namespace App\Http\Controllers\Website;
use App\Modeluser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestResetPassword;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
        return view('Website.Pages.forgot');
    }

    public function forgot_password(Request $request)
    {
        $email = $request->email;

        $checkUser = Modeluser::where('email',$email)->first();

        if (!$checkUser)
        {
            return redirect()->back()->with('danger','Email does not exist');
        }
    
        $code = bcrypt(md5(time().$email));
        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();
        
        $url =route('get_link_forgot',['code' => $code, 'email' => $email]);

        $data = [
            'route' => $url
        ];
        Mail::send('Website.Pages.link_forgot', $data, function($message) use ($email){
	        $message->to($email, 'Reset Password')->subject('Retrieve Your Password!');
        });
        return redirect()->back()->with('success','Password change link has been sent to your email');
    }

    public function link_forgot(Request $request)
    {   
        $code = $request->code;
        $email = $request->email;
        $checkUser = Modeluser::where([
            'code' => $code,
            'email' => $email
        ])->first();

        if(!$checkUser)
        {
            return redirect('/')->with('danger','Sorry! The password reset path is incorrect.');
        }

        return view('Website.Pages.reset_password',['code'=>$code,'email'=>$email]); 
    }

    public function save_forgot(RequestResetPassword $requestResetPassword ,$email,$code)
    {   
        if ($requestResetPassword->password == $requestResetPassword->password_comfirm)
        {
          
            $checkUser = Modeluser::where([
                'code' => $code,
                'email' => $email
            ])->first();
            if(!$checkUser)
            {
                return redirect()->back()->with('danger','Sorry! The password reset path is incorrect.');
            }else{
            $checkUser->password = md5($requestResetPassword->password);
            $checkUser->code = null;
            $checkUser->save();

            return redirect()->route('login')->with('success','Password was successfully changed. Please login!');
            }
        }
        return redirect()->back()->with('danger','Sorry! The password reset path is incorrect.');
    }
}


