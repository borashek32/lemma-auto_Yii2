<?php


namespace app\modules\user\controllers;

use app\models\AutopartSearch;
use yii\web\Controller;
use Yii;


class UserController extends Controller
{

    public function actionIndex()
    {
        $this->layout = '@app/views/layouts/user.php';
        return $this->render('index');
    }


    public function actionInfo()
    {
        $this->layout = '@app/views/layouts/user.php';

        return $this->render('info');
    }


    public function actionOrder()
    {
        $this->layout = '@app/views/layouts/user.php';

        return $this->render('order');
    }

    public function actionRole()
    {
//        $admin = Yii::$app->authManager->createRole('admin');
//        $admin->description = 'Администратор';
//        Yii::$app->authManager->add($admin);
//
//        $content = Yii::$app->authManager->createRole('content');
//        $content->description = 'Контент-менеджер';
//        Yii::$app->authManager->add($content);
//
//        $user = Yii::$app->authManager->createRole('user');
//        $user->description = 'Авторизованный пользователь';
//        Yii::$app->authManager->add($user);
//
//        $ban = Yii::$app->authManager->createRole('banned');
//        $ban->description = 'Заблокированный пользователь';
//        Yii::$app->authManager->add($ban);
//
//        $permit = Yii::$app->authManager->createPermission('canUser');
//        $permit->description = 'Право входа в пользовательскую админку';
//        Yii::$app->authManager->add($permit);
//
//        $permit = Yii::$app->authManager->createPermission('canAdmin');
//        $permit->description = 'Право входа в админку';
//        Yii::$app->authManager->add($permit);

//        $role_a = Yii::$app->authManager->getRole('admin');
//        $role_c = Yii::$app->authManager->getRole('content');
//        $permit = Yii::$app->authManager->getPermission('canAdmin');
//        Yii::$app->authManager->addChild($role_a, $permit);
//        Yii::$app->authManager->addChild($role_c, $permit);

//        $userRole = Yii::$app->authManager->getRole('admin');
//        Yii::$app->authManager->assign($userRole, Yii::$app->user->id());

//        $auth = Yii::$app->authManager;
//        $rule = new AdminRule();
//        $auth->add($rule);

        return 12121212;
    }
}