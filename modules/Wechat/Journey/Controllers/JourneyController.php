<?php
/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 27/06/2017
 * Time: 15:02
 */




namespace Modules\Wechat\Journey\Controllers;

use Modules\Wechat\Departure\Models\Departure;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Wechat\Journey\Models\Journey;

class JourneyController extends Controller
{
    use ModelForm;

    public function index()
    {

        return Admin::content(function (Content $content) {
            $content->header(trans('行程'));
            $content->description(trans('admin::lang.list'));
            $content->body($this->grid()->render());
        });
    }

    public function create()
    {
        $id = $_GET['id'];
        return Admin::content(function (Content $content) use ($id){
            $content->header(trans('行程'));
            $content->description(trans('admin::lang.create'));
            $content->body($this->form($id)->render());
        });
    }

    public function edit(Request $request,$id)
    {

        return Admin::content(function (Content $content) use ($id) {
            $content->header(trans('行程'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form()->edit($id));
        });

    }



    protected function grid()
    {
        return Admin::grid(Journey::class, function (Grid $grid) {
            $grid->column('product.title','产品');
            $grid->title('标题');
            $grid->description('描述');
            $grid->disableCreation();
            $grid->filter(function ($filter){
                $filter->like('product.title', '标签');
            });
        });
    }
    protected function form($id ='')
    {
        return Admin::form(Journey::class, function (Form $form) use ($id) {

            $form->tab('基础信息',function () use ($form,$id){
                $form->hidden('product_id')->value($id);
                $form->text('title','标题');
                $form->text('description','描述');
            });
            $form->tab('行程详细',function () use ($form){
                $form->hasMany('detail',function (Form\NestedForm $form){
                    $form->text('title','标题');
                    $form->text('content','详细内容');
                });
            });

            $form->saved(function (Form $form){
                return redirect('/admin/product/'.$form->input("product_id").'/edit#tab-form-7');
            });
        });
    }

}