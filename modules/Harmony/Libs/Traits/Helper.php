<?php
/**
 * Author: wtySk
 * Date: 2017/3/14 17:07
 */
namespace Modules\Harmony\Libs\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

trait Helper {

    /**
     * 获取验证码
     * https://github.com/mewebstudio/captcha  Document
     * @param Request $request
     * @return string
     */
    public function captcha(Request $request)
    {
            if($request->getMethod() == 'POST'){
                $rules = ['captcha' => 'required|captcha'];
                $validator = Validator::make(Input::all(), $rules);
                if ($validator->fails())
                {
                    echo '<p style="color: #ff0000;">Incorrect!</p>';
                }
                else
                {
                    echo '<p style="color: #00ff30;">Matched :)</p>';
                }
            }
            $form = '<form method="post" action="captcha-test">';
            $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
            $form .= '<p>' . captcha_img() . '</p>';
            $form .= '<p><input type="text" name="captcha"></p>';
            $form .= '<p><button type="submit" name="check">Check</button></p>';
            $form .= '</form>';
            return $form;
    }
}