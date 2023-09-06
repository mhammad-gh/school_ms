<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        return view('auth.select');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
