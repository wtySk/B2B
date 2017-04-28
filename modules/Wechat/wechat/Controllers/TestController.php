<?php
/**
 * Author: wtySk
 * Date: 2017/3/28 17:02
 */

namespace Modules\WeChat\WeChat\Controllers;


class TestController
{
    public function index()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料

        dd($user);
    }
}