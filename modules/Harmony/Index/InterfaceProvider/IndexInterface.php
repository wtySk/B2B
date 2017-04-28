<?php
/**
 * Author: wtySk
 * Date: 2017/3/14 11:54
 */
namespace Modules\Harmony\Index\InterFaceProvider;

/**
 * Interface IndexInterFace
 */
interface IndexInterface
{
    /**
     * 获取一个用户
     * @param $id
     * @return mixed
     */
    public function get($id);

}