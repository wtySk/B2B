<?php
namespace Modules\Harmony\Login\Controllers;
use Modules\Harmony\Libs\Foundation\Controller;
use Illuminate\Http\Request;
use Modules\Harmony\Index\Service\IndexService;
use Illuminate\Support\Facades\Validator;
use Crypt;

class LoginController extends Controller
{
    public function login() {
        return _view('Harmony.Login.login');
    }
	public function loginApi(Request $req)
	{
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make($req->all(), $rules);
        
        if ($validator->fails())
        {
            return ['success'=>false,'code'=>'验证码错误'];
        }
        $params = [
            "account"=>$req->input('username'),
            "password"=>$req->input('password')
        ];

        $url = 'miter/user/login';

        $reponse = apiPost($params,$url);
        //return json_encode($reponse);

        if($reponse->success){

        	// $psw=Crypt::encrypt($req->input('password'));
        	// session(['info'=>['account'=>$reponse->root->account,'psw'=>$psw]]);
        	session([
        	    'openId' => $reponse->root->openId,
        		'account'=>$reponse->root->account,
        		'name'=>$reponse->root->name,
        		'phone'=>$reponse->root->phone,
        		'email'=>$reponse->root->email,
        		'sex'=>$reponse->root->sex
        	]);
        	return ['success'=>true,'account'=>$reponse->root->account];
        }else{

        	return ['success'=>false,'code'=>$reponse->msg];
        }
	
	}

	public function quitLogin()
	{
		session()->flush();
	}


}