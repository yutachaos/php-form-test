<?php

namespace Layout;

use Model\LayoutAbstract;

/**
 * Created by PhpStorm.
 * User: y_kimura
 * Date: 2017/07/21
 * Time: 11:30
 */
class Textarea extends LayoutAbstract
{
    public function export()
    {
        //TODO layoutの生成処理
        $layout = '名前：<input type="text" name="name"/>';
        return $layout;
    }
}