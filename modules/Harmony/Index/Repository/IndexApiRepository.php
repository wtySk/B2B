<?php
/**
 * Author: wtySk
 * Date: 2017/3/16 17:48
 */


namespace Modules\Harmony\Index\Repository;

use Modules\Harmony\Index\Models\Index;
use Modules\Harmony\Libs\Foundation\Repository as LibsRepository;

/**
 * Class IndexApiRepository
 * @package Modules\Harmony\Index\Repository
 */
class IndexApiRepository extends LibsRepository
{

    protected $index;

    /**
     * IndexApiRepository constructor.
     * @param Index $index
     */
    public function __construct(Index $index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        $response = $this->index->where('id', '<', '10')->get();
        return $response;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        $user = $this->index->find($id);
        return $user;
    }

    /**
     * @param $num
     * @return string
     */
    public function paginate($num)
    {
        return 'paginate';
    }

    /**
     * @param $id
     * @param $params
     * @return bool
     */
    public function save($id, $params)
    {
        $data = $this->index->find($id);
        if ($data) {
            $response = $data->update($params);
        } else {
            $response = false;
        }
        return $response;
    }

    /**
     * @param $params
     * @return string
     */
    public function store($params)
    {
        // TODO: Implement store() method.
        return 'store';
    }

    /**
     * @return string
     */
    public function delete()
    {
        // TODO: Implement delete() method.
        return 'delete';
    }

    /**
     * @param $id
     * @param $params
     */
    public function update($id, $params)
    {
        // TODO: Implement update() method.
    }

}