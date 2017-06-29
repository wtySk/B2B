<?php
/**
 * Author: wtySk
 * Date: 2017/2/9 16:41
 */


namespace Modules\Wechat\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'product';
    protected $dates = ['delete_at'];

    protected $casts = [
        'feature' => 'json',
        'departure' => 'json',
        'strategy' => 'json',
        'labels' => 'json'
    ];

    protected $guarded = [
    ];

    public function departures()
    {
        return $this->hasMany('Modules\Wechat\Departure\Models\Departure','product_id','id');
    }

    public function journey()
    {
        return $this->hasMany('Modules\Wechat\Journey\Models\Journey','product_id','id');
    }

   /* public  $timestamps = false;*/

//   public function setOptionsAttribute($options)
//   {
//       if (is_array($options)) {
//           $this->attributes['options'] = join(',', $options);
//       }
//   }
//
//   public function getOptionsAttribute($options)
//   {
//       if (is_string($options)) {
//           return explode(',', $options);
//       }
//
//       return $options;
//   }
   
}