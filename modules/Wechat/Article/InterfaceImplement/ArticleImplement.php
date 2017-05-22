<?php
/**
 * Author: wtySk
 * Date: 2017/3/23 10:03
 */

namespace Modules\Wechat\Article\InterfaceImplement;

use Illuminate\Http\Request;
use Modules\Wechat\Article\Service\ArticleApiService;
use Modules\Wechat\Libs\Foundation\Api;
use Modules\Wechat\Article\InterfaceProvider\ArticleInterface;

/**
 * Class ArticleImplement
 * @package Modules\Wechat\Article\InterfaceImplement
 */
class ArticleImplement  extends Api implements ArticleInterface{

    protected $articleApiService;

    public function __construct(ArticleApiService $articleApiService)
    {
        $this->articleApiService = $articleApiService;
    }


    /**
     * @param Request $request
     * @return string
     */
    function getAll(Request $request)
    {
        header("Access-Control-Allow-Origin:*");
        $params = $request->all();
        $result = $this->articleApiService->getAll($params);
        return $result;
    }

    /**
     * 文章详情
     * @param Request $request
     * @return mixed
     */
    function getById(Request $request)
    {
        header("Access-Control-Allow-Origin:*");
        $params = $request->all();
        $result = $this->articleApiService->getById($params);
        return $result;
    }

    /**
     * 增加访问量
     * @param Request $request
     * @return mixed
     */
    function addHit(Request $request)
    {
        header("Access-Control-Allow-Origin:*");
        $params = $request->all();
        $return = $this->articleApiService->addHit($params);
        return $return;
    }

    function getByIdForPostman(Request $request,$id)
    {
        $params = $request->all();
        $result = $this->articleApiService->getById($params);
        return $result;
    }
}