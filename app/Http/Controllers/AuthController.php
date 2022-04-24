<?php

namespace App\Http\Controllers;
use App\Http\Interfaces\AuthInterface;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $AuthInterface;

    public function __construct(AuthInterface $AuthInterface)
    {
        $this->AuthInterface=$AuthInterface;
    }
    public function loginPage(){
        return  $this->AuthInterface->loginPage();

    }
    public function login(LoginRequest $request){
        return  $this->AuthInterface->login($request);
    }
    public function logout(){
        return  $this->AuthInterface->logout();
    }
}
