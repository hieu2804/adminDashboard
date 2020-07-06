<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;

class loginController extends Controller
{
    public function getlogin(){
    	return view('auth_login');
    }
    public function postlogin(Request $request){
    	$request ->validate(
    		[
    			'username' => 'required',
    			'password' => 'required',
    		]
    		,
    		[
    			'username.required' =>'Tài khoản không được để trống',
    			'password.required' => 'mật khẩu không được để trống',
    		]
    	);
    	$username['info'] = $request->username;
    	$password = $request->password;

    	if (Auth::attempt(['name' => $username, 'password' => $password])) {
    			return view('index',$username)->with('sucsess','Đăng Nhập thành công!');
		}
		return redirect()->back()->with('danger','Tài Khoản hoặc mật khẩu không chính xác');
    }
    public function getlogout(){
    	Auth::logout();
    	return redirect('auth_login');
    }
    public function getlock(){
        return view('auth_lock');
    }
    public function postlock(Request $request){
        $request ->validate(
            [
                'email' =>'required',
                'password' => 'required',
                'password_confirm'=> 'required|same:password',
            ]
            ,
            [
                'email.required' =>'email không được để trống',
                'password.required' =>'mật khẩu không được để trống',
                'password_confirm.required' =>'mật khẩu xác nhận không được để trống',
                'password_confirm.same' =>'Mật khẩu không giống nhau',
            ]);
            $password = $request->password;
            $email = $request->email;

            DB::table('users')->where('email',$email)
                                ->update(['password' =>bcrypt($password)]);
            return redirect()->back()->with('success','Thay đổi mật khẩu thành công!');  
    }



    public function getregister(){
        return view('auth_register');
    }

}
