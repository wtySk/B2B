<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 22/05/2017
 * Time: 15:31
 */

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin_users';
    protected $dates = ['delete_at'];
    protected $fillable = [
        'username',
        'name'
    ];
}