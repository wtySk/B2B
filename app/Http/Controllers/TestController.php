<?php

namespace App\Http\Controllers;


use FFMpeg\Coordinate\Dimension;
use FFMpeg\Coordinate\TimeCode;
use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\WMV;
use FFMpeg\Format\Video\X264;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Modules\Wechat\Product\Models\Product;

class TestController extends Controller
{
    //
    public function index()
    {
        echo phpinfo();
    }

    public function about()
    {
    }

    public function register()
    {
    }

    public function registerPost()
    {
    }
}
