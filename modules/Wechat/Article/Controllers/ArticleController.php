<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 11/05/2017
 * Time: 09:35
 */

namespace Modules\Wechat\Article\Controllers;

use Illuminate\Http\Request;
use Modules\Wechat\Article\Service\ArticleService;
use Modules\Wechat\Libs\Foundation\Controller;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index(Request $request)
    {
        $all =  $this->articleService->getAll( ['keyword' => '游世界']);
        return $all;
    }
}