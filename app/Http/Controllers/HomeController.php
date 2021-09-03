<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('user.userhome');
        }
    }

    public function index()
    {
        if (Auth::id()){
            return redirect('redirect');
        } else {
            return view('user.userhome');
        }
    }
}
