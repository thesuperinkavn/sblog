<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    protected function guard(){
        return Auth::guard('admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    use AuthenticatesUsers;

    //Redirect after login
    protected $redirectTo = '/admin/dashboard';
 
}