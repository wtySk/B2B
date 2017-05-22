<?php
/**
 * Author: wtySk
 * Date: 2017/3/13 16:45
 */

namespace Modules\Harmony\Index\Service;

use Illuminate\Http\Request;
use Modules\Harmony\Index\Repository\IndexRepository;
use Modules\Harmony\Libs\Traits\Helper;

/**
 * Class IndexService
 * @package Modules\Harmony\Index\Service
 */
class IndexService {

    use Helper;

    protected $indexRepository;

    /**
     * IndexService constructor.
     * @param IndexRepository $indexRepository
     */
    public function __construct(IndexRepository $indexRepository)
    {
        $this->indexRepository = $indexRepository;
    }

    /**
     * @return array
     */
    public function index()
    {
        $response = $this->indexRepository->getContent();
        $area = $response->root;
        //将前三个目的地城市提取出来，并赋值到 $areaList中
        $areaLength = count($area);
        $areaList=[];

        for($i=0;$i<$areaLength;$i++) {
            $areaList[$i] = $response->root[$i]->listSecond;
        }

        $threeMsg = [];
        for($n=0;$n<$areaLength;$n++) {
            if(count($areaList[$n])>=3){
                for($z=0;$z<3;$z++){
                    $threeMsg[$z] = $areaList[$n][$z];
                }
            }else{
                for($z=0;$z<count($areaList[$n]);$z++){
                    $threeMsg[$z] = $areaList[$n][$z];
                }
            }

            $area[$n]->msgName = $threeMsg;
        }
    //    dd($area,$areaLength,$areaList,$threeMsg,$area);
        $area = json_encode($area);
        //获取供应商
        $params = [];
        $url = 'miter/regiment/brand/list/search';
        $response = apiPost($params,$url);
        $brandName = json_encode($response->root);

        //获取第一个供应商的推荐产品，因为首页供应商的选中样式默认第一个
        $name = $response->root[0]->brandName;
        $params = [
            "brandName" => $name
        ];

        $url = 'miter/regiment/brand/hot/search';
        $response = apiPost($params,$url);
        $brandPro = $response->root;
        //查询尾单

        $_params = [
            'pageNum' => 1
        ];
        $url = 'miter/regiment/bargain/search';
        $_response = apiPost($_params, $url);


//        if ($_response->success || $_response->root != '') {
//            $bargainList = $_response->root->list;
//            foreach ($_response->root->list as $k => $v) {
//                $v->directPrice = $v->directPrice/100;
//                $v->tradePrice = $v->tradePrice/100;
//                if ($v->logo == '') {
//                    $v->logo = '/harmony/images/index_end.png';
//                }
//            }
//            $bargainSize = $_response->root->pageSize;
//        }else{
//            $bargainList = '{}';
//            $bargainSize = 1;
//        }

        foreach ($brandPro as $item) {
            $item->tradePrice = $item->tradePrice / 100;
            $item->directPrice = $item->directPrice / 100;
        }

        //获取每个推荐产品的名称 暂时先这么做
        $firstName[0]['pName'] = $response->root[0]->pName;
        $firstName[0]['clusterOpenId'] = $response->root[0]->clusterOpenId;
        $secondName[0]['pName'] = $response->root[1]->pName;
        $secondName[0]['clusterOpenId'] = $response->root[1]->clusterOpenId;
        $thirdName[0]['pName'] = $response->root[2]->pName;
        $thirdName[0]['clusterOpenId'] = $response->root[2]->clusterOpenId;
        $firstName = json_encode($firstName);
        $secondName = json_encode($secondName);
        $thirdName = json_encode($thirdName);
        $brandPro = json_encode($brandPro);
//        $bargainSize = json_encode($bargainSize);
//        $bargainList = json_encode($bargainList);
        $bargainSize = json_encode([]);
        $bargainList = json_encode([]);

        $result = compact('area','brandName','firstName','secondName','thirdName','brandPro','bargainList','bargainSize');

        return $result;
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getCaptcha(Request $request)
    {
       $captcha =  $this->captcha($request);
       return $captcha;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function brandPost(Request $request)
    {
        $temp = $request->all();
        $params = [
            "brandName" => $temp['brandName']
        ];
        $url = 'miter/regiment/brand/hot/search';
        $response = apiPost($params,$url);
        $brandPro = $response->root;
        foreach ($brandPro as $item) {
            $item->tradePrice = $item->tradePrice / 100;
            $item->directPrice = $item->directPrice / 100;
        }
        $firstName[0]['pName'] = $response->root[0]->pName;
        $firstName[0]['clusterOpenId'] = $response->root[0]->clusterOpenId;
        $secondName[0]['pName'] = $response->root[1]->pName;
        $secondName[0]['clusterOpenId'] = $response->root[1]->clusterOpenId;
        $thirdName[0]['pName'] = $response->root[2]->pName;
        $thirdName[0]['clusterOpenId'] = $response->root[2]->clusterOpenId;
        $firstName = json_encode($firstName);
        $secondName = json_encode($secondName);
        $thirdName = json_encode($thirdName);
        $brandPro = json_encode($brandPro);
        if($response->success){
            return ['brandPro' => $brandPro,'firstName' => $firstName,'secondName' => $secondName,'thirdName' => $thirdName];
        }
    }

    public function pagePost(Request $request){
        $params = $request->all();
        $url = 'miter/regiment/bargain/search';
        $response = apiPost($params,$url);
        if ($response->success && $response->root != '') {
            foreach ($response->root->list as $k => $v) {
                $v->directPrice = $v->directPrice/100;
                $v->tradePrice = $v->tradePrice/100;
                if ($v->logo == '') {
                    $v->logo = '/harmony/images/index_end.png';
                }
            }
            $bargainList = $response->root->list;
        }else{
            $bargainList = '{}';
        }
        $bargainList = json_encode($bargainList);
        return ['bargainList' => $bargainList];
    }

}