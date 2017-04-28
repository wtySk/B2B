<?php
/**
 * Author: wtySk
 * Date: 2017/2/3 10:10
 */
namespace App\Http\Controllers\Wty;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class WtyController extends Controller
{
    public function index(Request $request){
        $user = User::find(3);
        echo $user->name;
        $user->name = '🐰巧克力的味道';
        $user->save();
        echo $user->name;
    }
}