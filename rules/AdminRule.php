<?php

namespace app\rules;

use yii\rbac\Item;
use yii\rbac\Rule;

class AdminRule extends Rule
{

    public $name = 'isAdmin';

    public function execute($user, $item, $params)
    {
        if (isset($params['admin_id']) and ($params['admin_id'] == $admin_id)) {
            return true;
            }else{
            return false;
        }
    }
}