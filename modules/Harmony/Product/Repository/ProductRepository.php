<?php
/**
 * Author: wtySk
 * Date: 2017/3/13 18:15
 */

namespace Modules\Harmony\Product\Repository;

use Modules\Harmony\Libs\Foundation\Repository;

/**
 * Class IndexRepository
 * @package Modules\Harmony\Index\Repository
 */
class ProductRepository extends Repository {
    /**
     * 查询目的地
     * @param  string $regimentType 类型
     * @return array
     */
    public function targetSearch($regimentType = '')
    {
        $params = [
            'type' => $regimentType
        ];
        $url = 'miter/regiment/area/list/search';
        $response = apiPost($params, $url);
        if ($response->success) {
            $target = $response->root;
        }else{
            $target = '{}';
        }
        return json_encode($target); 
    }

    /**
     * 查询列表post
     * @param  [type] $params 
     * @return [type] 
     */
    public function listFind($params)
    {
        $url = 'miter/regiment/list/find';
        $response = apiPost($params,$url);
        $info = '{}';
        $count = 0;
        $currPage = 0;
        $pageCount = 1;
        if ($response->success) {
            $response = $response->root;
            if ($response != null) {
                foreach ($response->list as $value) {
                    $value->adultPrice = $value->adultPrice/100;
                    $value->showPrice = $value->showPrice/100;
                }
                $info = json_encode($response->list);
                $count = json_encode($response->count);
                $currPage = json_encode($response->currPage);
                $pageCount = json_encode($response->pageCount);
            }
        }
        return ['info' => $info,'count' => $count,'pageCount' => $pageCount, 'currPage' => $currPage];
    }
}