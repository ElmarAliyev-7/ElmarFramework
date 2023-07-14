<?php

namespace App\Http\Controllers\Admin;

class AuthController
{
    public function login()
    {
        return view('resources\view\admin\auth\login.php');
    }
}