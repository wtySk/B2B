<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 25/06/2017
 * Time: 15:36
 */


namespace Modules\Wechat\Journey\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JourneyDetail extends Model
{

    use SoftDeletes;
    protected $table = 'journey_detail';
    protected $dates = ['delete_at'];

    protected $guarded = [
        'id'
    ];


}