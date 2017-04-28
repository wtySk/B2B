<?php
/**
 * Author: wtySk
 * Date: 2017/3/20 15:54
 */
namespace Modules\Core\Libs\Foundation;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Core abstractBaseRequest
 * @package Modules\Core\Libs\Foundation
 */
abstract class BaseRequest extends FormRequest
{

    abstract function authorize();

    abstract function rules();

}
