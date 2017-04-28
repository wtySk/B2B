<?php
/**
 * Author: wtySk
 * Date: 2017/3/28 16:28
 */

namespace Modules\WeChat\WeChat\Controllers;


use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

class MenuController extends Controller
{
    public $menu;

    /**
     * MenuController constructor.
     * @param $app
     */
    public function __construct(Application $app)
    {
        $this->menu = $app->menu;
    }

    public function menu(){
        $option = [
    /*        [
                'type' =>'view',
                'name' => '旅行',
                'url' => 'http://petal.nabianet.com'
            ],*/
            [
                "type" => "view",
                "name" => "商城",
                "url"  => "http://petal.nabianet.com/shop",
                //  "key" => "V1"
            ],
      /*      [
                'type' =>'view',
                'name' => '智囊团',
                //    'url' => 'http://mp.weixin.qq.com/s?__biz=MzI1NDAwNDc5Ng==&mid=100000007&idx=1&sn=bf6e21c1063576e39f4da55c7b1c75bf&scene=18#wechat_redirect'
                'url' =>'http://petal.nabianet.com/articles'
            ],*/
      /*      [
                'type' =>'view',
                'name' => '游生活',
                'url' =>'http://petal.nabianet.com/article-life'
            ],*/
     /*      [
               "name"       => "其他",
               "sub_button" => [
                   [
                       "type" => "view",
                       "name" => "测试",
                       "url"  => "http://petal.nabianet.com/shop",
                     //  "key" => "V1"
                   ],
                   [
                       "type" => "view",
                       "name" => "游生活",
                       "url"  => "http://petal.nabianet.com/article-life",
                   ],
               ],
           ],*/

        ];
        $this->menu->add($option);
        return "<meta charset='utf-8'>页面添加成功 <a href='/menu/all'>查看自定义菜单</a>";

    }

    public function menuAll(){
        $menu = $this->menu->current();
        dd($menu);
    }

}