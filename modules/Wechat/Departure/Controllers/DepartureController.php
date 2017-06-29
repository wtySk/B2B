<?php

/**
 * Created by PhpStorm.
 * User: wtysk
 * Date: 26/06/2017
 * Time: 15:17
 */



namespace Modules\Wechat\Departure\Controllers;

use Carbon\Carbon;
use Encore\Admin\Widgets\Table;
use Modules\Wechat\Departure\Models\Departure;
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

class DepartureController extends Controller
{
    use ModelForm;

    public function index()
    {

        return Admin::content(function (Content $content) {
            $content->header(trans('团期'));
            $content->description(trans('admin::lang.list'));
            $content->body($this->grid()->render());
        });
    }

    public function create()
    {
        return Admin::content(function (Content $content){
            $content->header(trans('团期'));
            $content->description(trans('admin::lang.create'));
            $content->body($this->form()->render());
        });
    }

    public function edit(Request $request,$id)
    {

        return Admin::content(function (Content $content) use ($id) {
            $content->header(trans('团期'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form()->edit($id));
        });

    }



    protected function grid()
    {



        return Admin::grid(Departure::class, function (Grid $grid) {

            $grid->column('detail.title','产品名称');
            $grid->price('价钱');
            $grid->published_at('出发时间');
            $grid->filter(function ($filter) {
                $filter->like('detail.title','团期标题');
            });


        });
    }
    protected function form()
    {
        return Admin::form(Departure::class, function (Form $form)  {

            $form->display('detail.title','产品名称');
            $form->text('price','价钱');
            $form->datetime('published_at','出发时间');
            $form->datetime('created_at','创建时间')->readOnly();
            $form->datetime('updated_at','更新时间')->readOnly();

        });
    }

}