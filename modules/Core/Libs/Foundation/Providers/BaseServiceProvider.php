<?php
/**
 * Author: wtySk
 * Date: 2017/3/20 9:46
 */
namespace Modules\Core\Libs\Foundation\Providers;

use Illuminate\Support\ServiceProvider;

/**
 *  Core BaseService
 * @package Modules\Core\Libs\Foundation\Providers
 */
abstract class BaseServiceProvider extends ServiceProvider{

    /**
     *  注册后执行
     */
    abstract function boot();


    /**
     * 注册服务到容器
     */
    abstract function register();

}