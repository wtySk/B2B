<?php

namespace Modules\WeChat\WeChat\Controllers;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Message\Image;
use EasyWeChat\Message\Voice;
use EasyWeChat\Message\News;

class WeChatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
    //    Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志
            $wechat = app('wechat');
           // $welcome ="        HI! 你来了~欢迎逛逛随便聊聊!我是小编~~阿三!!!经常有人问“阿三”: 旅游产品那么多，我该如何选择？跟团游 、自由行、定制游，哪个性价比更高?2000块、4000块、6000块的产品有哪些区别?让我带你来了解了解吧！我们不是兜售商品的平台!!我们是帮你筛选旅游产品的助手!!!";
          //  $welcome = "HI，来啦。欢迎您来到“游三姐”旅游服务平台。\n我们为您提供旅游（游）中第三（三）方的解（姐）答方案\n当然，“游三姐”可以是你是他，只要你想，剩下的交给三姐啦。\n\n回复任意内容查看消息";
           $welcome = "HI 欢迎关注“游三姐”\n来，三姐和你聊聊\n如何加入高品质团\n如何躲避旅游雷区\n三姐用可视化的旅游知识\n帮你还原旅行本真 \n戳戳下边链接\n精彩就在眼前^_^\n☟☟☟\n和三姐一起跟随VR镜头去游泰国\nhttp://t.cn/RisvOtY\n去泰国吧，这个妖艳的国家不仅便宜还貌美如花\nhttp://t.cn/Risvr7r\n揭开皮肤变光滑的秘密，和粗糙永远say拜拜！\nhttp://t.cn/RisPv6a\n";


        //关注后返回图文消息
            $news1 = new News([
                'title'       => '旅游需要第三者',
                'description' => '旅游需要第三者',
                'url'         => 'http://mp.weixin.qq.com/s/6_D66CLFzKXHhD4mOUf9Pw',
                'image'       => 'https://mmbiz.qlogo.cn/mmbiz_png/ShdEd8ur17chOOyFNmJ0diaDV5kdAn8055WOXJWc9TLapm00JDFt0Clb4JsHu7iaUFJiby34YFnXmP6ZmB7M0GckA/0?wx_fmt=png',
                // ...
            ]);

            $news2 = new News([
                'title'       => '游秘笈 |泰国跟团游攻略',
                'description' => '游秘笈 |泰国跟团游攻略',
                'url'         => 'http://mp.weixin.qq.com/s/BwcOeqTgqUm4RJAN2K5RJQ',
                'image'       => 'https://mmbiz.qlogo.cn/mmbiz_jpg/ShdEd8ur17chOOyFNmJ0diaDV5kdAn805lw9ibanT60e7rhof4e5L113bmNtsvM5AM6rnr3Yp7HruIu3T944ZlHQ/0?wx_fmt=jpeg',
                // ...
            ]);

            $news3 = new News([
                'title'       => '游世界 |泰国旅游线路推荐',
                'description' => '游世界 |泰国旅游线路推荐',
                'url'         => 'http://mp.weixin.qq.com/s/n1tyVf_Q4-m3iLUpBwKOeQ',
                'image'       => 'https://mmbiz.qlogo.cn/mmbiz_jpg/ShdEd8ur17chOOyFNmJ0diaDV5kdAn8055R0w1icpfHIibqak6WrPKJA5GIlS5AwbG5NtW18OpacgoRXfhsIbby2A/0?wx_fmt=jpeg',
                // ...
            ]);

            $news4 = new News([
                'title'       => '游智慧 |为什么跟团游让你不爽？！',
                'description' => '游智慧 |为什么跟团游让你不爽？！',
                'url'         => 'http://mp.weixin.qq.com/s/iHMyAxJrq5b920whS2I9Cw',
                'image'       => 'https://mmbiz.qlogo.cn/mmbiz_jpg/ShdEd8ur17chOOyFNmJ0diaDV5kdAn805owlqiaHYH0NichG1BZTvp8lombeU4O5FOtkQJ6PqRwPiaY7NnY75YlOjw/0?wx_fmt=jpeg',
                // ...
            ]);

            $news5 = new News([
                'title'       => '游精品 |来自无癌之国斐济的皇室特供，纯手工打造无添加好皮肤！',
                'description' => '游精品 |来自无癌之国斐济的皇室特供，纯手工打造无添加好皮肤！',
                'url'         => 'http://mp.weixin.qq.com/s/pdDUQpqiAz0wnl16JhFuCA',
                'image'       => 'https://mmbiz.qlogo.cn/mmbiz_jpg/ShdEd8ur17chOOyFNmJ0diaDV5kdAn805r7b2caZmKXQbZeVa0pdy9eTicE3nVo0hreToq19bhANUScwXtElyFkg/0?wx_fmt=jpeg',
                // ...
            ]);

            $new6 = new News([
                'title' =>'往期回顾',
                'description' => '',
                'url' =>'https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzI1NDAwNDc5Ng==#wechat_redirect',
                'image' =>'http://petal.nabianet.com/images/logo.png'
            ]);
            $content =[$news1,$news2,$news3,$news4,$news5,$new6];

        $userApi = $wechat->user;


        $wechat->server->setMessageHandler(function($message) use($userApi,$wechat,$welcome,$content) {


            switch ($message->MsgType) {
                case 'event':

                    if($message->Event == 'subscribe'){
                            return $welcome;
                     //   return $content;
                    }

                   /* if($message->Event == 'CLICK'){
                        if($message->EventKey == 'wtysk'){
                            return $welcome;
                        }
                    }*/

                    break;
                case 'text':
                   // return $welcome;
                    return $content;
                    break;
                case 'image':
                    $image = new Image(['media_id' => 'yNov3WKmiv8EZaFstCq81k8qossRIpIuhy4Vzl1N62Q']);
                    $wechat->staff->message($image)->to($message->FromUserName)->send();
                    return "我们的Logo";
                    break;
                case 'voice':
                    $voice = new Voice(['media_id' =>'yNov3WKmiv8EZaFstCq81spY-i0nRWjGccAqb4DVbeo']);
                   // return $message;
                    $wechat->staff->message($voice)->to($message->FromUserName)->send();
                    return "欢迎收听 Battle Without Honor or Humanity";
                    break;
                case 'video':
                    # 视频消息...
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    break;
            }

       //      return "这是来自easywechat sdk！";
        });

      //  Log::info('return response.');

        return $wechat->server->serve();
    }
}
