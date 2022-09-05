<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Auth extends Controller
{
    private $email = 'demo@gmail.com';
    private $pass = 'demo@gmail.com';
    public $contentData = [];

    public function login() {
        $this->contentData['title'] = 'login';
        return view('admin.auth.login', $this->contentData);
    }
    public function register() {
        $this->contentData['title'] = 'register';
        return view('admin.auth.register', $this->contentData);
    }
    public function forgotPassword() {
        $this->contentData['title'] = 'forgot Password';
        return view('admin.auth.forgot-password', $this->contentData);
    }
    public function resetPassword() {
        $this->contentData['title'] = 'reset Password';
        return view('admin.auth.reset-password', $this->contentData);
    }

    public function handleLogin(Request $request) {
        $reqEmail = $request->email;
        $reqPass = $request->pass;
        if($this->email === $reqEmail && $this->pass===$reqPass) {
            return redirect(route('dashboard.top'));
        }
        return redirect(route('login'));
    }
}
