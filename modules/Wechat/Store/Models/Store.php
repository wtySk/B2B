<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 16/06/2017
 * Time: 14:43
 */

namespace Modules\Wechat\Store\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Store extends Model
{

    use SoftDeletes;
    protected $table = 'store';
    protected $dates = ['delete_at'];

    protected $guarded = [
    ];



}