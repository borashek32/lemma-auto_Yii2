<?php

namespace app\modules\admin;

use yii\base\Action;
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layoutPath = 'app\modules\admin\views\layouts';
    public $layout = 'admin';

    public function init()
    {
        parent::init();
    }
}