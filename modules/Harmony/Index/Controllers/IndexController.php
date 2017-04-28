<?php
/**
 * Author: wtySk
 * Date: 2017/3/7 12:00
 */
namespace Modules\Harmony\Index\Controllers;

use Illuminate\Http\Request;
use Modules\Harmony\Index\Service\IndexService;
use Modules\Harmony\Libs\Foundation\Controller;


/**
 * 首页
 * @package Modules\Harmony\Index\Controllers
 */
class IndexController extends Controller
{

    /**
     * @var IndexService
     */
    public $indexService;

    /**
     * IndexController constructor.
     * @param IndexService $indexService
     */
    public function __construct(IndexService $indexService)
    {
        $this->indexService = $indexService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View|\Laravel\Lumen\Application|mixed
     */
    public function index()
    {
            $_param['type'] = '';
            $url = 'petal/search/area';
            $result = apiPost($_param,$url);
            return json_encode($result);
            dd($result);
        //$arr = $this->indexService->index();
      //  return _view('Harmony.Index.index',$arr);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function brandPost(Request $request)
    {
        return $this->indexService->brandPost($request);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function pagePost(Request $request)
    {
        return $this->indexService->pagePost($request);
    }

    /**
     * 获取验证码
     * @param Request $request
     * @return string
     */
    public function getCaptcha(Request $request)
    {
       $captcha = $this->indexService->getCaptcha($request);
        return $captcha;
    }
}

