<?php

namespace Modules\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        '/packages/ckeditor/ckeditor.js',
      /*  '/packages/jquery/jquery-3.1.1.js',*/
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {

        $this->script = "CKEDITOR.replace( '{$this->getElementClass()[0]}' );";
      //  $this->script = "$('textarea.{$this->getElementClass()}').ckeditor();";

        return parent::render();
    }
}