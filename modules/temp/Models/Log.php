<?php
/**
 * Author: wtySk
 * Date: 2017/2/7 10:58
 */
namespace Modules\Admin\Models;


use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    protected $table = 'admin_operation_log';

    public function scopeMethodGet()
    {
        return $this->where('method', 'GET');
    }

    public function scopeMethodPost()
    {
        return $this->where('method', 'POST');
    }

    protected $fillable = [
        'user_id',
        'path',
        'method',
        'ip',
        'input',
    ];

/*    protected $guarded = ['*'];*/

}
