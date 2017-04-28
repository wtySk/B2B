<?php

namespace Modules\Harmony\Index\Request;

use Modules\Harmony\Libs\Foundation\Request;


/**
 * 提交数据验证
 * @package Modules\Harmony\Index\Request
 */
class IndexRequest extends Request
{

    /**
     * 用户是否允许访问
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         /*   'name' => 'required|min:3',*/
        ];
    }
}
