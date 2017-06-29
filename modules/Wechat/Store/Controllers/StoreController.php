<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 16/06/2017
 * Time: 14:46
 */

namespace Modules\Wechat\Store\Controllers;

use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Form;
use Encore\Admin\Form as AdminForm;
use App\Http\Controllers\Controller;
use Encore\Admin\Widgets\InfoBox;
use Illuminate\Http\Request;
use Modules\Wechat\Store\Models\Store;


class StoreController extends Controller
{
    use ModelForm;

    public function index()
    {

//        return redirect('/admin/store/'.$user->id.'/edit');

        return Admin::content(function (Content $content) {

            $user = Store::where('user_id',11)->first();
            $content->header('门店');
            $content->description('基本信息');
            $content->body(view('admin.view',compact('user'))->render());

        });
    }

    public function edit($id)
    {
        if($id != Admin::user()->id){
            return "你不能查看其他用户的信息!";
        }
        $id = Store::where('user_id',$id)->first()->id;
        return Admin::content(function (Content $content) use ($id) {
            $content->header(trans('门店'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form()->edit($id));
        });
    }

    public function form()
    {
        return Admin::form(Store::class, function (AdminForm $form)  {

            $form->hidden('id');
            $form->text('name','名称')->setWidth(4);
            $form->textarea('description','描述')->setWidth(4);
            $form->image('logo', 'logo')->setWidth(4);
            $form->text('domain','后缀名')->help('访问地址');
            $form->text('contacts','联系人');
            $form->text('phone', '联系电话');
            $form->text('business', '经营种类');
            $form->text('address', '地址');
            $form->datetime('created_at','创建时间');
            $form->datetime('updated_at','更新时间');

            $form->saved(function(AdminForm $form){
            });
        });

    }

}