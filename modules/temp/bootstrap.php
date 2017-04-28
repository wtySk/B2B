<?php
/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use Encore\Admin\Form;
use Encore\Admin\Grid\Column;
use Modules\Admin\Extensions\Form\CKEditor;
use Modules\Admin\Extensions\Column\Popover;
//设置模板目录到resource文件夹下面
//app('view')->prependNamespace('admin', resource_path('/views/admin'));
//app('translator')->addNamespace('admin', resource_path('lang/admin'));
Encore\Admin\Form::forget('editor');
Encore\Admin\Form::forget('map');
Form::extend('ckeditor', CKEditor::class);
//
////注册自定义扩展两种方式 匿名函数 扩展类
//Column::extend('color', function ($value, $color) {
//    return "<span style='color: $color'>$value</span>";
//});
//Column::extend('popover', Popover::class);
