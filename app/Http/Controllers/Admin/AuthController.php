<?php

namespace FabioVige\Http\Controllers\Admin;

use Illuminate\Http\Request;
use FabioVige\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('admin.dashboard');
    }


}
