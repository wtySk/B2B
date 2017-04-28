<?php
/**
 * Author: wtySk
 * Date: 2017/3/23 14:17
 */

namespace Modules\Wechat\Article\Transformer;

use League\Fractal\TransformerAbstract;
use Modules\Wechat\Article\Models\Article;

class ListTransformer extends TransformerAbstract
{
    public function transform(Article $article) {
        return [
            'id' =>$article->id,
            'title' =>$article->title,
            'keyword' => $article->keyword,
            'description' =>$article->description,
            'hits' =>$article->hits,
            'imageLocal' =>env('ADMIN_UPLOAD') . $article->image_local,
            'imageCloud' =>   $article->image_cloud ? env('QINIU_DOMAIN').$article->image_cloud:'',
            'videoUrl' =>$article->video_url,
            'publishDate' => $article->published_at,
            // ...
        ];
    }
}