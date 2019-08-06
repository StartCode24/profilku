<?php

namespace App\Http\Controllers\Auth2;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;

class RegisterController2 extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registerEmail()
    {
        return view('auth/registeremail');
           
    }
    public function registerEmailStore(Request $request)
    
    {
        Session::put('key', $request->all());
        return Session::get('key');
        
    }
    public function registerName()
    {
        return view('auth/registername');
    }
    public function registerPhoto()
    {
        return view('auth/registerphoto');
    }
    public function registerLocation()
    {
        return view('auth/registerphoto');
    }
    public function registerInterests()
    {
        return view('auth/registerinterests');
    }
    public function registerRoles()
    {
        return view('auth/registerroles');
    }
    public function registerSpotlight()
    {
        return view('auth/registerspotlight');
    }
}
