<?php
/**
 * Author: wtySk
 * Date: 2017/2/9 16:04
 * 基础功能模板
 */


namespace Modules\Wechat\Product\Controllers;

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
            $content->header(trans('标签'));
            $content->description(trans('admin::lang.list'));
            $content->body($this->grid()->render());
        });
    }

    public function create()
    {
        return Admin::content(function (Content $content){
            $content->header(trans('标签'));
            $content->description(trans('admin::lang.create'));
            $content->body($this->form()->render());
        });
    }

    public function edit(Request $request,$id)
    {
        return Admin::content(function (Content $content) use ($id,$request) {
            $product = Product::all()->pluck('orderid')->toArray();
            $content->header(trans('标签'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form($product)->edit($id));
        });
    }

    public function release(Request $request)
    {
        foreach (Product::find($request->get('ids')) as $product) {
            $product->published = $request->get('action');
            $product->save();
        }
    }


    protected function grid()
    {
        return Admin::grid(Product::class, function (Grid $grid) {

//            取消删除和编辑功能
                $grid->actions(function ($actions) {
//                $actions->disableDelete();
//                $actions->disableEdit();

               // 当前行的数据数组
//                $actions->row;
//
//                 获取当前行主键值
//                $actions->getKey();
//                    // append一个操作
//                    $actions->append('<a href=""><i class="fa fa-eye"></i></a>');
//
//                    // prepend一个操作
//                    $actions->prepend('<a href=""><i class="fa fa-paper-plane"></i></a>');

                   // 添加自定义操作
                    $actions->append(new OperationController($actions->getKey()));
                });

            //$grid->数据库字段名('列标题')->可排序列->可编辑列
            //$form表单中有对应的列展示才能用editable()
            //$grid->id('ID')->sortable()->editable();

//            //拼凑多个列的内容
//            $grid->column('full_name')->display(function () {
//                return $this->title . ' ' . $this->type;
//            });

//            $grid->published_at()->editable('datetime');

                //开关组
//            $grid->column('switch_group')->switchGroup([
//                'published'       => '热门',
//                'new'       => '最新',
//                'recommend' => '推荐',
//            ], $states);

            //添加自定义工具类
//            $grid->tools(function ($tools) {
//                $tools->append(new UserGender());
//            });
            //去除批量删除的按钮
//            $grid->tools(function ($tools) {
//                $tools->batch(function ($batch) {
//                    $batch->disableDelete();
//                });
//            });



            $grid->id('ID')->editable();
            $grid->title('title')->ucfirst()->editable('textarea');
            $grid->type('Type1')->badge('danger');

         //   $grid->column('type')->color('#888');
            $grid->options()->checkbox([
                1 => 'Sed ut perspiciatis unde omni',
                2 => 'voluptatem accusantium doloremque',
                3 => 'dicta sunt explicabo',
                4 => 'laudantium, totam rem aperiam',
            ]);

            $grid->filter(function ($filter){
                $filter->like('title', 'title');

                // sql: ... WHERE `user.email` = $email;
                $filter->is('type', 'type~~~');
            });
     //       $grid->type()->popover('left');
     //       $grid->picture()->image('http://lorempixel.com/100/100/?84251');

     /*       $grid->column('img_url')->display(function ( $url ){
                return '<img src="'.$url.'" style="max-width: 100px;">';
            });*/

            $grid->img_url()->image('',100,100);

            $grid->tools(function ($tools) {
                $tools->batch(function ($batch) {
                    $batch->add('发布文章', new ReleaseProduct(1));
                    $batch->add('文章下线', new ReleaseProduct(0));
                });
            });


            $grid->created_at()->sortable();
            $grid->updated_at()->sortable();

            $states = [
                'on' => ['value' => 1,'text' => '通过'],
                'off' => ['value' => 0,'text' => '未审'],
            ];
            $grid->published('审核')->switch($states);
            $grid->model()->orderBy('orderid', 'desc');

        });
    }
    protected function form()
    {
        return Admin::form(Product::class, function (Form $form)  {

            $form->display('id', 'ID');
            $form->text('title');
            $form->text('type');
            $form->image('img_url');
     //       $form->text('description');
            $form->ckeditor('description');
        //    dd( Product::find($form->ge));
            $order = [
                0=>1,
                1=>2,
                2=>3,
                3=>4,
                4=>5,
                5=>6,
            ];
       /*     $order =  $obj->pluck('orderid')->toArray();*/
            $form->select('orderid','排序')->options($order);
            $form->checkbox('options')->options([
                1 => 'Sed ut perspiciatis unde omni',
                2 => 'voluptatem accusantium doloremque',
                3 => 'dicta sunt explicabo',
                4 => 'laudantium, totam rem aperiam',
            ]);
            $form->switch('published');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
            $form->saving(function () use ($form){
            });
        });
    }

}