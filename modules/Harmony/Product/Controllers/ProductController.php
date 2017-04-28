<?php
/**
 * Author: wtySk
 * Date: 2017/3/7 12:00
 */
namespace Modules\Harmony\Product\Controllers;

use Illuminate\Http\Request;
use Modules\Harmony\Product\Service\ProductService;
use Modules\Harmony\Libs\Foundation\Controller;


class ProductController extends Controller
{

    /**
     * @var IndexService
     */
    public $productService;

    /**
     * IndexController constructor.
     * @param productService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * 产品列表
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function productList(Request $request)
    {
        $arr = $this->productService->productList($request);
        return _view('Harmony.Product.list', $arr);
    }

    /**
     * 产品查询post
     * @param  Request $requset 
     * @return array           
     */
    public function productListPost(Request $request)
    {
        return $this->productService->productListPost($request);
    }
    
    /**
     * 产品详情
     * @param  [int] $id 产品id
     * @return [type]
     */
    public function productDetail($id)
    {
        if (session('openId') == '') {
            return redirect('/harmony/log')->withErrors(['message' => '请您先登录']);
        }
        $arr = $this->productService->productDetail($id);
        return _view('Harmony.Product.detail', $arr);
    }

    /**
     * 团期日历点击上下月份重新获取
     * @param  Request $request 
     * @return array           
     */
    public function productDetailPost(Request $request) {
        return $this->productService->productDetailPost($request);
    }
}

