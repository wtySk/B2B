<?php
/**
 * Author: wtySk
 * Date: 2017/2/9 16:04
 * 基础功能模板
 */


namespace Modules\Wechat\Product\Controllers;

use Carbon\Carbon;
use Encore\Admin\Widgets\Table;
use Modules\Wechat\Departure\Models\Departure;
use Modules\Wechat\Journey\Models\Journey;
use Modules\Wechat\Product\Models\Product;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Tab;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Extensions\Column\OperationController;
use Modules\Admin\Extensions\Tools\UserGender;
use Modules\Admin\Extensions\Tools\ReleaseProduct;
use Modules\Admin\Extensions\Column\Popover;

class ProductController extends Controller
{
    use ModelForm;

    public function index()
    {

        return Admin::content(function (Content $content) {
            $content->header(trans('跟团游'));
            $content->description(trans('admin::lang.list'));
            $content->body($this->grid()->render());
        });
    }

    public function create()
    {
        return Admin::content(function (Content $content){
            $content->header(trans('跟团游'));
            $content->description(trans('admin::lang.create'));
            $content->body($this->form()->render());
        });
    }

    public function edit(Request $request,$id)
    {
        return Admin::content(function (Content $content) use ($id,$request) {
            $content->header(trans('跟团游'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form($id)->edit($id));
        });
    }



    protected function grid()
    {
        return Admin::grid(Product::class, function (Grid $grid) {

            $grid->image('logo')->image('',100,100);
            $grid->title('title')->editable('textarea');
            $grid->feature('产品特色')->map(function($feature){
                return $feature;
            })->implode('</br>');
            $grid->departure('出发地')->map(function($departure){
                return $departure;
            })->implode('</br>');
            $grid->departure_mode('出发方式');
            $grid->backup('备注');

            $grid->created_at()->sortable();
            $grid->updated_at()->sortable();


            $states = [
                'on' => ['value' => 1,'text' => '是'],
                'off' => ['value' => 0,'text' => '否'],
            ];
            $grid->is_recommend('推荐')->switch($states);

            $states = [
                'on' => ['value' => 1,'text' => '通过'],
                'off' => ['value' => 0,'text' => '未审'],
            ];
            $grid->is_published('审核')->switch($states);
           // $grid->model()->orderBy('order_id', 'desc');

        });
    }
    protected function form($id =1)
    {
        return Admin::form(Product::class, function (Form $form) use ($id) {

            $form->tab('基本信息',function () use ($form){
                $form->text('title','标题')->rules('required|min:3');
                $form->image('image','logo')->rules('required');
                $form->text('days','天数')->setWidth(2)->default(0);
                $form->text('nights','晚数')->setWidth(2)->default(0);
                $form->text('destination','目的地');
                $form->textarea('content','内容')->setWidth(4);
                $form->text('hotel_star','酒店星级');
                $form->text('supplier','供应商');
                $form->switch('is_published','是否发布');
                $form->switch('is_recommend','是否推荐');
                $form->datetime('created_at', 'Created At')->default(Carbon::now());
                $form->datetime('updated_at', 'Updated At')->default(Carbon::now());
            });

            $form->tab('特色',function () use ($form){

                $form->embeds('feature','特色', function ($form) {
                    $form->text('feature1','特色1');
                    $form->text('feature2','特色2');
                    $form->text('feature3','特色3');
                    $form->text('feature4','特色4');
                });

            });

            $form->tab('出发',function () use ($form){

                $form->text('departure_mode','出发方式');

                $form->embeds('departure','出发地', function ($form) {
                    $form->text('departure1','出发地1');
                    $form->text('departure2','出发地2');
                    $form->text('departure3','出发地3');
                    $form->text('departure4','出发地4');
                });

            });

            $form->tab('升级策略',function () use ($form){

                $form->embeds('strategy','升级策略', function ($form) {
                    $form->text('strategy1','升级策略1');
                    $form->text('strategy2','升级策略2');
                    $form->text('strategy3','升级策略3');
                    $form->text('strategy4','升级策略4');
                });

            });
            $form->tab('标签',function () use ($form){

                $form->embeds('labels','标签', function ($form) {
                    $form->text('label1','标签1');
                    $form->text('label2','标签2');
                    $form->text('label3','标签3');
                    $form->text('label4','标签4');
                });

            });

            $form->tab('团期',function () use($form,$id){

                $form->hasMany('departures',function (Form\NestedForm $form) use ($id){
                    $form->datetime('published_at','出团时间');
                    $form->text('price','价格')->default(0)->setWidth(3);

                    $form->select('journey_id','行程方案')->options(function() use ($id) {
                        $journey = Journey::where('product_id',$id)->get();
                        $arr =[];
                        foreach ($journey as $item){
                            $arr[$item->id] = $item->title;
                        }
                        return $arr;
                    });

                });

            });

            $form->tab('行程',function () use($form){

                $form->hasMany('journey',function (Form\NestedForm $form){
                    $form->display('title','行程标题')->readOnly();
                    $form->display('description','描述信息')->readOnly();


                    $form->display('id','编辑方案')->with(function ($value) {
                        if($value !=''){
                            return '<input class="journey-edit  btn btn-primary btn-sm" type="button" src="/admin/journey/'.$value.'/edit" value="编辑"></input>';
                        }else{
                            return '';
                        }});
                })->mode('show');

                $form->display('id','新增行程')->with(function ($id) {
                    if($id !=''){
                        return '<input class="journey-edit  btn btn-success" type="button" src="  /admin/journey/create?id='.$id.'" value="新增">';
                    }else{
                        return '';
                    }});
            });


            $form->tab('其他信息',function () use($form){

                $form->text('backup','备注');
                $form->text('schedule','班期说明');
                $form->text('qrcode','二维码')->help('请出入二维码的地址,前台页面自动生成相应的二维码');


            });

            $form->tab('长图片',function () use ($form){
                $form->image('long_image','长图片');
            });



            $form->saving(function () use ($form){

            });

        });
    }

}