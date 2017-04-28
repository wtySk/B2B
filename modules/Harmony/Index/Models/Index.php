<?php

/**
 * Author: wtySk
 * Date: 2017/3/13 10:53
 */

namespace Modules\Harmony\Index\Models;

use Modules\Harmony\Libs\Foundation\Model;


/**
 * Class Index
 * @package Modules\Harmony\Index\Models
 */
class Index extends Model
{

    /**
     * @var string
     */
    protected  $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email'
    ];

}
