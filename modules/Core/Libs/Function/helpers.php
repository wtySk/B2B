<?php
/**
 * Author: wtySk
 * Date: 2016/11/25 16:52
 */
use Illuminate\Contracts\View\Factory as ViewFactory;



//通用全局方法



if (! function_exists('_view')) {
    /**
     *  返回视图方法
     * @param null $view 字符串.号连接
     * @param array $data 数组参数
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\View
     */
    function _view($view = null, $data = [], $mergeData = [])
    {
        $factory = app(ViewFactory::class);
        if (func_num_args() === 0) {
            return $factory;
        }
        //设置3个变量 模块名称 视图下文件夹名称 视图文件名称
        list($project, $moduleName, $viewName) = explode('.', $view);
        return view()->file(base_path('Modules\\' . $project . '\\' . $moduleName . '\\Views\\' . $viewName . '.blade.php'), $data, $mergeData);
    }
}



function modulesNamespace($file, $name = 'Controllers'){
    /**
     * @param $file
     * @param string $name 默认为Controllers
     * @return string
     */
    $firstLevel = basename(dirname(dirname(dirname($file))));
    $secondLevel = basename(dirname((dirname($file))));
    return 'Modules\\'.$firstLevel.'\\'.$secondLevel.'\\'.$name;
}



if (! function_exists('apiPost')) {
    /**
     *  curl方法请求java接口
     * @param array $data   数组格式数据
     * @param string $url   接口路由
     * @param string $domain    域名地址
     * @return mixed
     */
    function apiPost($data = [], $url='', $domain = DOMAIN)
    {
   //     $data =  clear_captcha($data);//去除captcha
        $json = json_encode($data,JSON_FORCE_OBJECT);//转换成json格式
        $sign_raw = env('PREFIX') . $json . env('SUFFIX');//拼接 sign
        $sign = md5($sign_raw);//md5  (sign)
        $url = $domain.$url;//拼接url
        //构造传递的数组
        $param = [
            'param' => $json,
            'user' => 'petal',
            'sign' => $sign
        ];
        $params = http_build_query($param);//数组转成字符串形式
   //     dd($params,$url);
        $res = postData($params,$url);
        //   $res = postData($url,$json);
        $response = json_decode($res);

        return $response;
    }
}


if (! function_exists('postData')) {
    /**
     *  封装传递过来的参数
     * @param $url
     * @param $params
     * @return mixed
     */
    function postData($params,$url)
    {
        $ch = curl_init();
        $timeout = 60000;//设置60秒等待时间 毫秒为单位
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';//设置头文件content-type
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);//Post请求
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params); //传递参数
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $handles = curl_exec($ch);
        curl_close($ch);
        return $handles;
    }
}


if (! function_exists('clear_captcha')) {
    /**
     * 去除数组中的captcha字段
     * @param $data
     * @return mixed
     */
    function clear_captcha($data)
    {
        if (array_key_exists('captcha', $data)) {
            unset($data['captcha']);
        }
        return $data;
    }
}






