<?php

namespace Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Chart\Bar;
use Encore\Admin\Widgets\Chart\Doughnut;
use Encore\Admin\Widgets\Chart\Line;
use Encore\Admin\Widgets\Chart\Pie;
use Encore\Admin\Widgets\Chart\PolarArea;
use Encore\Admin\Widgets\Chart\Radar;
use Encore\Admin\Widgets\Collapse;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Tab;
use Encore\Admin\Widgets\Table;
use Modules\Wechat\Store\Models\Store;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('控制台');
            $content->description('基本信息');

            $content->row(function ($row) {
                $row->column(3, new InfoBox('restaurant', 'users', 'aqua', '/admin/store', '门店信息'));
                $row->column(3, new InfoBox('restaurant', 'shopping-cart', 'green', '#', '酒店'));
                $row->column(3, new InfoBox('plane', 'book', 'yellow', '#', '机票'));
                $row->column(3, new InfoBox('visa', 'file', 'red', '#', '签证'));
            });

        });
    }
}
