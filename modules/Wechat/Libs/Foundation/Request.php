<?php
/**
 * Author: wtySk
 * Date: 2017/3/20 15:53
 */

namespace Modules\Wechat\Libs\Foundation;

use Modules\Core\Libs\Foundation\BaseRequest;

/**
 * Libs Request
 * @package Modules\Harmony\Libs\Foundation
 */
class Request extends BaseRequest{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // TODO: Implement rules() method.
    }
}