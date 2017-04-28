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

        return view('test');
        
    }

    public function post(Request $request)
    {
         $fileContents = $request->file('file');
        // $disk = Storage::disk('qiniu');
        //dd($disk);
        //$size=Storage::disk('admin')->size('myimage/9d1882dbc01f84bfed7e819f9e1f1ff2.png');
        //$disk=Storage::disk('admin')->put('myimage',$fileContents);
         $disk=Storage::putFile('/',$fileContents); // arg1 路径
         
        // $req=$request->file('file')->store('avatars','admin');//storeAs自定义文件名  均返回路径
        // $req=Storage::disk('admin')->delete('myimage/3.png');
        

        // $disk->copy('upload/image/922a2be7e3064019ef9d369acc26f47f.png','upload/image/922a2be7e3064019ef9d369acc26f47f.png');

        //dd( fopen($fileContents->getRealPath(), 'w'));
// create a file
//        $result =  $disk->put('avatars/3', fopen($fileContents->getRealPath(), 'r'));
// check if a file exists
 //       $exists = $disk->has('php7.jpg');
// get timestamp
       // $time1 = $disk->lastModified('php7.jpg');
       // $time2 = $disk->getTimestamp('php7.jpg');

// copy a file
//        $disk->copy('php7.jpg', 'php71.jpg');
// move a file
   //     $disk->move('php71.jpg', 'php72.jpg');

// get file contents
  //      header('Content-type: image/jpg');
 //       $contents = $disk->read('php7.jpg');
    }

    public function ca()
    {
        // cache(['kb'=>'laravel 学院'],1);
        // echo 2;
        dd(cache('kb'));
    }
}
