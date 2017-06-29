<?php
/**
 * Author: wtySk
 * Date: 2017/2/28 14:11
 */

namespace Modules\Wechat\Service\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\InfoBox;

//引入自定义类
use Modules\Wechat\Libs\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Modules\Wechat\Article\Models\Article;
use Modules\Wechat\Libs\Foundation\Controller;
use Modules\Admin\Extensions\Tools\ReleaseProduct;

class ServiceAdminController extends Controller
{

    use Helper;

    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('文章'));
            $content->description(trans('admin::lang.list'));
            $content->body($this->grid()->render());
        });
    }

    public function create()
    {
        return Admin::content(function (Content $content){
            $content->header(trans('文章'));
            $content->description(trans('admin::lang.create'));
            $content->body($this->form()->render());
        });
    }

    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header(trans('文章'));
            $content->description(trans('admin::lang.edit'));
            $content->body($this->form()->edit($id));
        });
    }

    public function release(Request $request)
    {
        foreach (Article::find($request->get('ids')) as $product) {
            $product->is_published = $request->get('action');
            $product->save();
        }
    }

    protected function grid()
    {

        return Admin::grid(Article::class, function (Grid $grid) {

            //根据推荐、倒序做排序
            $grid->model()->orderBy('is_recommend','DESC')->orderBy('order_id','DESC');
            //如果是管理员级别 显示所有文章 否则显示当前用户录入的文章
            if(!Admin::user()->isAdministrator()){
                $grid->model()->where('author_id',Admin::user()->id);
            };

            $grid->filter(function ($filter){
                $filter->disableIdFilter();
            });

            $grid->filter(function ($filter){
                $filter->like('keyword', '标签');
            });

            //批量操作
            $grid->tools(function ($tools) {
                $tools->batch(function ($batch) {
                    $batch->add('发布文章', new ReleaseProduct(1));
                    $batch->add('文章下线', new ReleaseProduct(0));
                });
            });

            $grid->order_id('排序')->editable();
            $grid->title('标题')->editable('textarea');
            $grid->description('简介')->limit(20);
            $grid->column('articleAuthor.name','作者');
            $grid->keyword('标签');
            $grid->image_local('缩略图')->image('',100,100);
            $grid->hits('点击次数')->sortable();
            $grid->published_at('发布时间')->sortable();
            $grid->updated_at('更新时间')->sortable();

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

    protected function form()
    {
        return Admin::form(Article::class, function (Form $form)  {
            $id = Article::max('order_id')+1;
            $datetime = new \DateTime();
            $form->tab('基本',function () use ($form,$id,$datetime){
                $form->text('title','标题')->rules('required|min:2');
                $form->text('description','简介');

                $form->image('image_local','缩略图')->name(function($file){
                    $imageName = md5($file->getSize().$file->getFileName()).'.'.$file->guessExtension();
                    return $imageName;
                });
                $form->hidden('image_cloud','图片');
                $form->number('width','缩略图宽')->default(450)->help('默认为450');
                $form->number('height','缩略图高')->default(300)->help('默认为300');
                $form->ignore(['width', 'height']);
                /*  $form->image('imageMultiple','组图')->multiple();*/
                $option = ['游地方'=>'游地方','游路线'=>'游路线','游攻略'=>'游攻略','游精品'=>'游精品'];
                $form->select('keyword','标签')->options($option);
                $form->text('hits','点击次数')->default(0);
                $form->text('order_id','排序')->default($id);
                $form->switch('is_published','是否发布');
                $form->switch('is_recommend','是否推荐');
                $form->ckeditor('content','内容');
                $form->datetime('published_at','发布时间')->default($datetime->format('Y-m-d H:i:s'));
                $form->hidden('updated_at', '更新时间')->default($datetime->format('Y-m-d H:i:s'));
                $form->hidden('author_id','作者id')->default(Admin::user()->id);
            });
            $form->saving(function(Form $form){
                if($form->input('image_local') != null) {
                    //存储到七牛云上
                    $imageName = config('admin.upload.image') . md5($form->input('image_local')->getSize() . $form->input('image_local')->getFileName()) . '.' . $form->input('image_local')->guessExtension();
                    // $disk = Storage::disk('qiniu');
                    // $return = $disk->put($imageName,fopen($form->input('image')->getRealPath(), 'r'));
                    // if ($return){
                    //     $form->image_cloud = env('QINIU_DOMAIN').'/'.$imageName.'?imageMogr2/auto-orient/thumbnail/450x300>/blur/1x0/quality/75|imageslim';
                    // }
                    $getRealPath = $form->input('image_local')->getRealPath();
                    $return = $this->uploadImage($imageName, $getRealPath);
                    if ($return) {
                        $form->image_cloud = $imageName;
                    }
                }
            });
            $form->saved(function(Form $form){
//                      if($form->input('image_local') != null){
//                          $width = request('width') <= 0 ? 450 : (int)request('width');
//                          $height = request('height') <= 0 ? 300 : (int)request('height');
//                          $imageName = config('admin.upload.image').md5($form->input('image_local')->getSize().$form->input('image_local')->getFileName()).'.'.$form->input('image_local')->guessExtension();
//                          Image::make($imageName)->resize($width,$height)->save();
//                      }
            });
        });
    }


    public function basic()
    {
        //1.查看当前用户的详细资料
        return Admin::content(function (Content $content) {

            $content->header('服务商');
            $content->description(Admin::user()->name);

            $content->row(function ($row) {
                $row->column(3, new InfoBox('New Users', 'users', 'aqua', '/admin/users', '1024'));
                $row->column(3, new InfoBox('New Orders', 'shopping-cart', 'green', '/admin/orders', '150%'));
                $row->column(3, new InfoBox('Articles', 'book', 'yellow', '/admin/articles', '2786'));
                $row->column(3, new InfoBox('Documents', 'file', 'red', '/admin/files', '698726'));
            });

        });
    }

}