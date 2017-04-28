<?php
/**
 * Author: wtySk
 * Date: 2017/3/15 17:01
 */

namespace Modules\Harmony\Libs\Foundation\Transformer;

use League\Fractal\Serializer\ArraySerializer;

/**
 * Libs GeneralSerializer
 * @package Modules\Harmony\Libs\Foundation\Transformer
 */
class GeneralSerializer extends ArraySerializer
{
    /**
     * Serialize a collection.
     */
    public function collection($resourceKey='root', array $data)
    {
        return [
            'success' => true,
            'status_code' =>200,
            'message' => '',
            'root' => $data,
        ];
    }

    /**
     * Serialize an item.
     */
    public function item($resourceKey='root', array $data)
    {
        return [
            'success' => true,
            'status_code' => 200,
            'message' => '',
            'root' => $data
        ];
    }

//    public function success($resourceKey = 'root', array $data)
//    {
//        return ['success' => true];
//    }
}