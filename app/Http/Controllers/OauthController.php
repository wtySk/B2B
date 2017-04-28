<?php

namespace App\Http\Controllers;


use App\Client;
use Illuminate\Http\Request;

class OauthController extends Controller
{
    //
    public function get()
    {
        return Client::all();
    }

    public function post(Request $request)
    {
        $params = array_merge($request->all(),['secret' => md5(time())]);
         Client::create($params);
    }

    public function put(Request $request,$id)
    {
        $user = Client::find($id);
        $user->save($request->all());
    }

    public function delete($id)
    {
        dd($id);
        Client::destroy($id);
    }
}
