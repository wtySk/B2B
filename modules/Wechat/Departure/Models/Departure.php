<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 21/06/2017
 * Time: 10:02
 */


namespace Modules\Wechat\Departure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Departure extends Model
{

    use SoftDeletes;
    protected $table = 'departure_dates';
    protected $dates = ['delete_at'];

    protected $guarded = [
        'id'
    ];

    public function detail(){
        return $this->belongsTo('Modules\Wechat\Product\Models\Product', 'product_id','id');
    }

}