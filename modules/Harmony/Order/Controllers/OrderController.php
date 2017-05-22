<?php
namespace Modules\Harmony\Order\Controllers;
use Modules\Harmony\Libs\Foundation\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ask($id) {
        if (session('openId') == '') {
            return redirect('/harmony/log')->withErrors(['message' => '请您先登录']);
        }
        $params['specOpenId'] = $id;
        $url = 'miter/order/ask';
        $response = apiPost($params,$url);

        if($response->success) {
            $info = $response->root;

            $info->adultIndustryPrice = $info->adultIndustryPrice/100;
            $info->adultDirectPrice = $info->adultDirectPrice/100;
            $info->childIndustryPrice = $info->childIndustryPrice/100;
            $info->childDirectPrice = $info->childDirectPrice/100;
            $info->singleRoomIndustryPrice = $info->singleRoomIndustryPrice/100;
            $info->singleRoomDirectPrice = $info->singleRoomDirectPrice/100;
            if($info->specPriceList != null) {
                foreach($info->specPriceList as $item) {
                    $item->price = $item->price/100;
                    $item->industryPrice = $item->industryPrice/100;
                    $item->directPrice = $item->directPrice/100;
                }
            }
            $infoList = json_encode($response->root->extraResultDto);
        }
        return _view('Harmony.Order.order',compact('info','infoList','id'));
    }

    public function orderPost(Request $request) {

        $temp = $request->all();
        $params = $temp['msg'];
        $url = 'miter/order/quick';
        $response = apiPost($params,$url);
        dd($params);
        if($response->success) {
            return ['result' => 'true', 'url' => '/success'];
        }else{
            return ['result' => 'false', 'msg' => '下单失败'];
        }

    }
}