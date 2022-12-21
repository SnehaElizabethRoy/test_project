<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Student extends BaseController
{
    public function index()
    {
        return view('login');
    
    }
    public function signin()
    {
        return view('signin');
    }
}