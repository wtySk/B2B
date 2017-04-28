<?php
/**
 * Author: wtySk
 * Date: 2017/3/13 18:15
 */

namespace Modules\Harmony\Index\Repository;

use Modules\Harmony\Index\Models\Index;
use Modules\Harmony\Libs\Foundation\Repository;
/**
 * Class IndexRepository
 * @package Modules\Harmony\Index\Repository
 */
class IndexRepository extends Repository {

    /**
     * @var Index
     */
    protected $index;

    /**
     * IndexRepository constructor.
     * @param Index $index
     */
    public function __construct(Index $index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function javaGetData()
    {
        //左侧目的地数据获取
        $params = [];
        $url = 'miter/area/list/search';
       // $url = 'petal/search/area';

        $response = apiPost($params,$url);
        return $response;
    }


    /**
     * @return mixed
     */
    public function getContent(){

        if(JAVAPROVIDER){
           $response = $this->javaGetData();
        }else{
            $response = $this->index->where('id','=','3')->get();
        }
        return $response;
    }


    /**
     * @return mixed
     */
    public function getAll()
    {
        $response = $this->index->where('id','<','10')->get();
        return $response;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
    //    $user = Index::find($id);
        $user = $this->index->find($id);
        return $user;
    }

    /**
     * @param $num
     */
    public function paginate($num){

    }

    /**
     * @param $index
     * @param $params
     * @return bool
     */
    public function update($index, $params){

        if($index == null){
            return false;
        }
        $response  = $index->update($params);
        return $response;
    }

}