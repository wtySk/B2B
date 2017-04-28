<?php
/**
 * Author: wtySk
 * Date: 2017/3/13 11:17
 */

namespace Modules\Harmony\Index\InterfaceImplement;
use Illuminate\Http\Request;
use Response;
use Modules\Harmony\Libs\Foundation\Api;
use Modules\Harmony\Index\Service\IndexApiService;
use Modules\Harmony\Index\InterFaceProvider\IndexInterface;

/**
 * 首页接口
 * @package Modules\Harmony\Index\Api
 */
class IndexImplement extends Api implements IndexInterface
{
    protected $indexApiService;

    /**
     * IndexApi constructor.
     * @param IndexApiService $indexApiService
     */
    public function __construct(IndexApiService $indexApiService)
    {
        $this->indexApiService = $indexApiService;
    }

    /**
     * @return \Dingo\Api\Http\Response
     */
    public function getAll()
    {
        $data = $this->indexApiService->getAll();
        return $data;
    }

    /**
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function get($id)
    {
        $data = $this->indexApiService->getById($id);
        return $data;
    }

    /**
     * @param $num
     * @return string
     */
    public function paginate($num){

        $data = $this->indexApiService->paginate($num);
         return $data;

    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->indexApiService->update($request,$id);
         return  $data;
    }
}