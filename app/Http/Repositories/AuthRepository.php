<?php 
namespace App\Http\Repositories;


use Illuminate\Support\Facades\Auth;
use App\Http\Interfaces\AuthInterface;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class AuthRepository implements AuthInterface{
    public function loginPage(){
     return view('admin.login');
    }
    public function login($request){
        $credentials = $request->only(['email', 'password']);
        if (  Auth::attempt($credentials)) {
            Alert::success('success','Welcome Back '. Auth::user()->name);
            return redirect(route('admin.dashboard'));
        }
        return redirect()->back()->withErrors(['error' => 'You Don\'t Have Access To Login']);
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('loginpage'));
    }
}