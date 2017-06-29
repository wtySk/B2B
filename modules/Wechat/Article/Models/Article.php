<?php
/**
 * Author: wtySk
 * Date: 2017/2/24 14:31
 */

namespace Modules\Wechat\Article\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    //显示文章的作者
    public function articleAuthor()
    {
        return $this->hasOne('Modules\Admin\Models\Admin','id','author_id');
    }

    protected $table = 'we_article';
    protected $dates = ['delete_at'];
    protected $fillable = [
        'title',
        'description',
        'author',
        'content',
        'keyword',
        'hits',
        'image_local',
        'image_cloud',
        'video_url',
        'wechat_link',
        'order_id',
        'is_recommend',
        'is_published',
        'published_at',
        'deleted_at',
    ];
}