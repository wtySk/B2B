<?php
/**
 * Author: wtySk
 * Date: 2017/3/13 16:45
 */

namespace Modules\Harmony\Product\Service;

use Illuminate\Http\Request;
use Modules\Harmony\Product\Repository\ProductRepository;
use Modules\Harmony\Libs\Traits\Helper;

/**
 * Class ProductService
 * @package Modules\Harmony\Product\Service
 */
class ProductService {

    use Helper;

    /**
     * @var productRepository
     */
    protected $productRepository;

    /**
     * IndexService constructor.
     * @param productRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * 查询列表信息
     * @return [type] [description]
     */
    public function productlist(Request $request)
    {
        $data = $request->all();
        //查询目的地
        $target = $this->productRepository->targetSearch($data['regimentType']);
        //查询供应商
        $_params = [];
        $url = 'miter/regiment/supplier/search';
        $response = apiPost($_params,$url);
        if ($response->root) {
            $supplier = $response->root->supplierList;
            $str='';
            $_str = '';
            foreach ($supplier as $val) {
                if($val!='' || $val!=null)
                {
                    $str.='<li><a href="javascript:void(0)">'.$val.'</a></li>';
                    $_str .= '<li>
                                <a href="javascript:void(0)" class="clearboth">
                                    <input type="checkbox">
                                    <span class="click_prev_input">'.$val.'</span>
                                </a>
                            </li>';
                }
            }
        }
        //查询产品列表
        $params_info = [
            "pageNum" => 1
        ];
        $tmp = $request->all();
        $arr = [];
        foreach ($tmp as $k => $v) {
            $arr[$k] = $v;
        }
        $condition = array_merge($params_info, $arr);
        $url = "miter/regiment/list/find";
        $response = apiPost($condition,$url);
        if ($response->root != null && $response->success) {
            $response=$response->root;
            foreach ($response->list as $value) {
                $value->adultPrice = $value->adultPrice/100;
                $value->showPrice = $value->showPrice/100;
            }
            $info = json_encode($response->list);
            $count = json_encode($response->count);
            $pageCount = json_encode($response->pageCount);
        }else{
            $response->root = '{}';
            $info = '{}';
            $count = 0;
            $pageCount = 1;
        }
        $result = compact('target','str','_str','info','count','pageCount');
        return $result;
    }

    /**
     * 查询列表post
     * @param  Request $request 
     * @return array
     */
    public function productListPost(Request $request)
    {
        $params = $request->all();
        //查询列表
        $info = $this->productRepository->listFind($params);
        //查询目的地
        $target = $this->productRepository->targetSearch($params['regimentType']);
        $info_list = array_merge($info, ['target' => $target]);
        return $info_list;
    }

    /**
     * 产品详情
     * @param  [type] $id 产品id
     * @return [array]
     */
    public function productDetail($id)
    {
        $params = [
            "openId" => $id
        ];
        $url = 'miter/regiment/detail/search';
        $reponse = apiPost($params,$url);

        //基本信息
        $basicResultDto = json_encode($reponse->root->basicResultDto);

        //交通信息
        $trafficResultDtos = json_encode($reponse->root->trafficResultDtos);

        //目的地 没有找到放在哪里
        $endCityResultDtos = json_encode($reponse->root->endCityResultDtos);

        //行程参考
        $journeyResultDtos = json_encode($reponse->root->journeyResultDtos);

        //额外信息
        $extraResultDto = json_encode($reponse->root->extraResultDto);

        //团期日历
        $date = date("Y-m");
        $params = [
            "regimentOpenId" => $id,
            "date" =>$date
        ];
        $url = 'miter/regiment/period/list/search';
        $reponse = apiPost($params,$url);
        $list = $reponse->root;
        //如果本月为空则获取下一个月 有待完善
        if($list == null) {
            $date = date('Y-m',strtotime('+1 month'));
            $params = [
                "regimentOpenId" => $id,
                "date" =>$date
            ];
            $url = 'miter/regiment/period/list/search';
            $reponse = apiPost($params,$url);
            $list = $reponse->root;
        }
        foreach ($list as $item) {
            $item->goDate = date("Y-n-j", strtotime($item->goDate));
            $item->adultIndustryPrice = $item->adultIndustryPrice / 100;
            $item->adultDirectPrice = $item->adultDirectPrice / 100;
            $item->childIndustryPrice = $item->childIndustryPrice / 100;
            $item->childDirectPrice = $item->childDirectPrice / 100;
            $item->singleRoomIndustryPrice = $item->singleRoomIndustryPrice / 100;
            $item->singleRoomDirectPrice = $item->singleRoomDirectPrice / 100;
            if($item->customPriceList != null) {
                foreach($item->customPriceList as $item2) {
                    $item2->price = $item2->price/100;
                    $item2->industryPrice = $item2->industryPrice/100;
                    $item2->directPrice = $item2->directPrice/100;

                }
            }
        }
        //最早的出团日期 排除非法团期
        for($i=0;$i<count($list);$i++) {
            $time = date('Y-m-d',strtotime($list[$i]->goDate));
            if($time < date('Y-m-d') ) {

                unset($list[$i]);
            }else if($list[$i]->surplusCount == 0) {
                unset($list[$i]);
            }

        }
        $list = array_values($list);
        $date = $list[0]->goDate;
        $firstMsg = $list[0];
        $date = explode('-',$date);
        $endYear = $date[0] + 1;
        array_push($date,$endYear);
        $date = json_encode($date);
        $firstMsg = json_encode($firstMsg);
        $list = json_encode($list);
        $result = compact('date','firstMsg','id','basicResultDto','trafficResultDtos','endCityResultDtos','journeyResultDtos','extraResultDto','list');
        return $result;
    }

    /**
     * 日历上下月
     * @param  Request $request 
     * @return [type]
     */
    public function productDetailPost(Request $request)
    {
        $temp = $request->all();
        $params = [
            "regimentOpenId" => $temp['regimentId'],
            "date" => $temp['date']
        ];
        $url = 'miter/regiment/period/list/search';
        $reponse = apiPost($params,$url);
        $list = $reponse->root;
        if($list != null) {
            foreach ($list as $item) {
                $item->goDate = date("Y-n-j", strtotime($item->goDate));
                $item->adultIndustryPrice = $item->adultIndustryPrice / 100;
                $item->adultDirectPrice = $item->adultDirectPrice / 100;
                $item->childIndustryPrice = $item->childIndustryPrice / 100;
                $item->childDirectPrice = $item->childDirectPrice / 100;
                $item->singleRoomIndustryPrice = $item->singleRoomIndustryPrice / 100;
                $item->singleRoomDirectPrice = $item->singleRoomDirectPrice / 100;
                if($item->customPriceList != null) {
                    foreach($item->customPriceList as $item2) {
                        $item2->price = $item2->price/100;
                        $item2->industryPrice = $item2->industryPrice/100;
                        $item2->directPrice = $item2->directPrice/100;
                    }
                }
            }
        }
        //最早的出团日期 排除非法团期
        if($list != null) {
            for($i=0;$i<count($list);$i++) {
                $time = date('Y-m-d',strtotime($list[$i]->goDate));
                if($time < date('Y-m-d') ) {
                    unset($list[$i]);
                }else if($list[$i]->surplusCount == 0) {
                    unset($list[$i]);
                }
            }
            $list = array_values($list);
            $list =  json_encode($list);
        }
        if($list != null) {
            return ['result' => 'true', 'list' => $list];
        }else{
            return ['result' => 'false', 'message' => '暂无团期'];
        }
    }
}