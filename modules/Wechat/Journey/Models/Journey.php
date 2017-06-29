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


class Journey extends Model
{

    use SoftDeletes;
    protected $table = 'journey';
    protected $dates = ['delete_at'];

    protected $guarded = [
        'id'
    ];

    public function product(){
        return $this->belongsTo('Modules\Wechat\Product\Models\Product', 'product_id','id');
    }

    public function detail(){
        return $this->hasMany('Modules\Wechat\Journey\Models\JourneyDetail','journey_id','id');
    }

}