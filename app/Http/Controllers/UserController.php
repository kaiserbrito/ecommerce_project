<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
     public function getProfile()
    {
        return view('user.profile');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('product.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
