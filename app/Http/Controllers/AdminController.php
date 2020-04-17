<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use redirect;

class AdminController extends Controller
{
    public function getIndex(){
        return view('backend.home');
    }
    public function getLogin(){
        return view('backend.pages.login');
    }
    public function postLogin(Request $request){
        $this->validate($request , [
            'email' => 'required',
            'password' => 'required|min:3|max:25'
        ] , [
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu không dưới 3 ký tự',
            'password.max'=> 'Mật khẩu không lớn hơn 25 ký tự'

        ]);

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                dd($request);
            return redirect()->route('admin.get.index');
        }
        else{
            return back()->with('error','Đăng nhập thất bại ! Vui lòng thử lại');
        }

    }
}
