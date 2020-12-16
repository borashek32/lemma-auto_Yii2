<?php

namespace app\modules\user\controllers;

use app\models\LoginForm;
use app\models\SignupForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;


class DefaultController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['admin/login'],
                        'roles' => ['canAdmin'],
                    ],
                ],
            ],
        ];
    }


    public function actionLogin()
    {
        $this->layout = '@app/views/layouts/main.php';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/user/');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout(false);
        $this->layout = '@app/views/layouts/main.php';

        return $this->goHome();
    }


    public function actionSignup()
    {
        $this->layout = '@app/views/layouts/main.php';
        $model = new SignupForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());

            if ($model->signup());
            {
                return $this->redirect(['/user/login']);
            }
        }

        return $this->render('signup', compact('model'));
    }
}
