<?php
/**
 * Author: wtySk
 * Date: 2017/2/13 11:35
 * 自定义操作类
 */

namespace Modules\Admin\Extensions\Column;

use Encore\Admin\Admin;

class OperationController
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    protected function script()
    {
        return <<<SCRIPT

$('.grid-check-row').on('click', function () {

    // Your code.
    console.log($(this).data('id'));

});

SCRIPT;
    }

    protected function render()
    {
        Admin::script($this->script());

        return "<a class='btn btn-xs btn-success fa fa-check grid-check-row' data-id='{$this->id}'>diy</a>";
    }

    public function __toString()
    {
        return $this->render();
    }
}