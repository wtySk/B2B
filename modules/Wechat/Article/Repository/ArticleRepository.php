<?php
/**
 * Author: wtySk
 * Date: 2017/3/23 13:43
 */

namespace Modules\Wechat\Article\Repository;

use App\User;
use EasyWeChat\Core\Exception;
use Illuminate\Http\Request;
use Modules\Wechat\Article\Models\Article;
use Modules\Wechat\Libs\Foundation\Errors\NotFoundException;
use Modules\Wechat\Libs\Foundation\Repository;
use Modules\Wechat\Product\Models\Product;


/**
 * Class ArticleRepository
 * @package Modules\Wechat\Article\Repository
 */
class ArticleRepository extends Repository
{
    /**
     * @var Article
     */
    protected $article ;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * 返回结果集
     * @param $params
     * @return mixed
     */
    public function accessAll($params,$perNumber)
    {

        //需要跳过的数据数量
        $skip = ($params['page']-1) *$perNumber;
        //释放参数里的无用参数
        unset($params['page']);

       $articles = $this->article->where($params)
                                            ->skip($skip)->take($perNumber)
                                            ->where('is_published',1)
                                            ->where('deleted_at',null)
                                            ->limit($perNumber)
                                            ->orderBy('is_recommend','DESC')
                                            ->orderBy('order_id','DESC')
                                            ->get();
        return $articles;
    }
    
    /**
     * 获取查询数据总条数
     * @param  [type] $params
     * @return [type]
     */
    public function accessAllCount($params)
    {
        //释放参数里的无用参数
        unset($params['page']);
        //根据条件查询出集合
        $return = $this->article->where($params)
                                    ->where('is_published',1)
                                    ->where('deleted_at',null)
                                    ->count();
        return $return;
    }

    public function accessById($params)
    {
        try{
            $article = $this->article->where($params)->get()[0];
        }catch (\Exception $exception){
            throw new NotFoundException();
        }
        return $article;
    }

    /**
     * 增加访问量
     * @param [type] $params 
     */
    public function addHit($params)
    {
        if ($params){

            return $this->article->where($params)->increment('hits');
        }
    }
}