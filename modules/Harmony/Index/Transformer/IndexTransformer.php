<?php
/**
 * Author: wtySk
 * Date: 2017/3/15 15:55
 */

namespace Modules\Harmony\Index\Transformer;

use League\Fractal\TransformerAbstract;
use Modules\Harmony\Index\Models\Index;

/**
 * Class IndexTransformer
 * @package Modules\Harmony\Index\ApiTransformer
 */
class IndexTransformer extends TransformerAbstract
{
    /**
     * @param Index $index
     * @return array
     */
    public function transform(Index $index) {
        return [
            'id' =>$index->id,
            'name' =>$index->name,
            // ...
        ];
    }
}

