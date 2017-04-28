<?php

/**
 * Author: wtySk
 * Date: 2017/3/24 12:02
 */

namespace Modules\Wechat\Libs\Foundation\Errors;

use Symfony\Component\HttpKernel\Exception\HttpException;

class NotFoundException extends HttpException
{
    public function __construct($code = 404,$message = '没有找到数据')
    {
        parent::__construct($code,$message);
    }

}