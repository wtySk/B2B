<?php
/**
 * Author: wtySk
 * Date: 2017/3/23 9:41
 */
namespace Modules\Wechat\Article\InterfaceProvider;

use Illuminate\Http\Request;

interface ArticleInterface{

    /**
     * 文章列表
     * @param $request
     * @return mixed
     */
    function getAll(Request $request);

    /**
     * 文章详情
     * @return mixed
     */
    function getById(Request $request);

    /**
     * 增加访问量
     * @return mixed
     */
    function addHit(Request $request);


}