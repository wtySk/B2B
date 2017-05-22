<?php

namespace App\Http\Controllers;


Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('test.test');
    }

    public function about()
    {
        return view('test.about');
    }

    public function register()
    {
        return view('test.register');
    }

    public function registerPost()
    {
        return 'Success!';
    }
}
