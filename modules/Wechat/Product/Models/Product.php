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
    protected $table = 'demo_product';
    protected $dates = ['delete_at'];
   /* public  $timestamps = false;*/

   public function setOptionsAttribute($options)
   {
       if (is_array($options)) {
           $this->attributes['options'] = join(',', $options);
       }
   }

   public function getOptionsAttribute($options)
   {
       if (is_string($options)) {
           return explode(',', $options);
       }

       return $options;
   }
   
}