<?php
/**
 * Author: wtySk
 * Date: 2017/3/16 17:48
 */

namespace Modules\Harmony\Index\Service;

use Illuminate\Http\Request;
use Modules\Harmony\Libs\Foundation\Service;
use Modules\Harmony\Index\Repository\IndexApiRepository;
use Modules\Harmony\Index\Transformer\IndexTransformer;

/**
 * Class IndexApiService
 * @package Modules\Harmony\Index\Service
 */
class IndexApiService extends Service
{

    protected $indexApiRepository;

    /**
     * IndexApiService constructor.
     * @param IndexApiRepository $indexApiRepository
     */
    public function __construct(IndexApiRepository $indexApiRepository)
    {
        $this->indexApiRepository = $indexApiRepository;
    }

    /**
     * @return \Dingo\Api\Http\Response
     */
    public function getAll()
    {
        $user = $this->indexApiRepository->getAll();
        $result = $this->response->collection($user, new IndexTransformer());
        $result = $result->morph();
        $obj = json_decode($result->content());
           $obj->root = [
                'data' => $obj->root,
               'page' => $obj->root,
            ];
        $content = json_encode($obj) ;
        $result->setContent($content);
        if ($result->content() == '') {
            $this->response->error('没有找到数据getAll', '200');
        }
        return $result;
    }

    /**
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function getById($id)
    {
        $user = $this->indexApiRepository->get($id);
        if ($user == null) {
          $this->response->error('没有找到数据get', 200);
        } else {
            return $this->response->item($user, new IndexTransformer());
        }
    }

    /**
     * @param $num
     * @return string
     */
    public function paginate($num)
    {
        $user = $this->indexApiRepository->paginate($num);
        return $user;
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function update(Request $request, $id)
    {
        $params = $request->all();
        $result = $this->indexApiRepository->update($id, $params);
        if (!$result) {
            $this->response->error('更新失败', 200);
        }
        return $this->indexApiRepository->getSuccess('更新成功');
    }
}