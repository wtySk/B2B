<?php
/**
 * Author: wtySk
 * Date: 2017/3/16 11:39
 */


namespace Modules\Harmony\Libs\Foundation\Providers;

use Modules\Core\Libs\Foundation\Providers\BaseServiceProvider;
use Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Modules\Harmony\Libs\Foundation\Transformer\GeneralSerializer;
use League\Fractal\Manager;
use Dingo\Api\Transformer\Adapter\Fractal;

/**
 * Libs ApiServiceProvider
 * @package Modules\Harmony\Libs\Foundation\Providers
 */
class ApiServiceProvider extends BaseServiceProvider{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //截取HttpException 自定义错误信息
        app('Dingo\Api\Exception\Handler')->register(function (HttpException $exception) {
            $error = [
                'success' => false,
                'status_code' =>  $exception->getStatusCode(),
                'message' => $exception->getMessage(),
                'root' =>''
            ];
            return Response::make($error);
        });

        //注册转换器
        app('Dingo\Api\Transformer\Factory')->setAdapter(function ($app) {
            $fractal = new Manager;
            $fractal->setSerializer(new GeneralSerializer());
            return new Fractal($fractal);
        });

    }

    /**
     * @return void
     */
    public function register()
    {
    }
}