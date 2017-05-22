<?php
/**
 * Author: wtySk
 * Date: 2017/3/23 11:55
 */

namespace Modules\Wechat\Article\Service;

use Modules\Wechat\Article\Repository\ArticleRepository;
use Modules\Wechat\Article\Transformer\DetailTransformer;
use Modules\Wechat\Article\Transformer\ListTransformer;
use Modules\Wechat\Libs\Foundation\Service;

/**
 * Class ArticleApiService
 * @package Modules\Wechat\Article\Service
 */
class ArticleService extends Service
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param $params
     * @return \Dingo\Api\Http\Response
     */
    public function getAll($params =[])
    {

        /*
       * 传入参数
       *
       *          ['keyword' => '游世界']
       *
       * 返回结果
       *
       *"data": [
      {
        "id": 166,
        "title": "别样真实丨澳新凯墨旅游线路推荐",
        "keyword": "游世界",
        "description": "国土辽阔，物产丰富",
        "hits": 91,
        "imageLocal": "/garland/upload/img/1487730016200.jpg",
        "imageCloud": "",
        "videoUrl": "",
        "publishDate": null
      },
      {
        "id": 165,
        "title": "别样真实丨阿联酋旅游线路推荐",
        "keyword": "游世界",
        "description": "沙漠中的花朵",
        "hits": 31,
        "imageLocal": "/garland/upload/img/1487734047281.jpg",
        "imageCloud": "",
        "videoUrl": "",
        "publishDate": null
      }]
       * */

        //设置默认分页为1
        isset($params['page']) ?'':$params['page'] = 1;
        //默认每页显示10条数据
        $perNumber = 10;

        $data =  $this->articleRepository->accessAll($params,$perNumber);
        //格式化返回数据
        $articles = $this->response->collection($data, new ListTransformer());
        $obj = json_decode($articles->morph()->content());

        //如果没有查到数据 返回失败
        if (empty($obj->root)) {
            $this->response->error('没有找到数据', 200);
        }

        //查询总记录
        $count = $this->articleRepository->accessAllCount($params);

        $obj->root = [
            'data' => $obj->root,
            'currentPage' => intval($params['page']),
            'pageCount' => $count,
            'pageSize' => $perNumber,
        ];
        $obj = json_encode($obj);
        $articles->setContent($obj);

        return $articles;
    }


    /**
     * 根据id返回单篇文章
     * @param $params
     * @return \Dingo\Api\Http\Response
     */
    public function getById($params)
    {
        /*
         * 传入参数
         *
         *          ['id' = 99]
         *
         * 返回结果
         *
         * "root": {
                        "id": 89,
                        "title": "别样真实丨台湾旅游线路推荐",
                        "description": "约上闺蜜一起吧",
                        "content": "<p style=\"text-align: center;\"><strong><span style=\"font-size: 24px;\">别样真实丨台湾旅游线路推荐</span></strong></p><p><strong><span style=\"font-size: 24px;\"><br/></span></strong></p><p style=\"text-align: center;\"><strong><span style=\"font-size: 16px; font-family: 宋体,",
                        "imageLocal": "/garland/upload/img/1487735682213.jpg",
                        "imageCloud": ""
                      }
         * */

        $data = $this->articleRepository->accessById($params);
        //格式化返回数据
        $article = $this->response->item($data, new DetailTransformer());
        return $article;
    }

    /**
     * 点击增加访问量
     * @param [type] $params
     */
    public function addHit($params)
    {
        $return = $this->articleRepository->addHit($params);
        return $return;
    }
}