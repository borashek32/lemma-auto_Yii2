<?php

namespace app\controllers;


use app\models\SignupForm;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Request;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\RegistrationForm;
use app\models\Review;
use app\models\ContactForm;
use app\models\Post;
use app\models\Category;
use yii\db\ActiveQuery;
use app\widgets\Alert;
use app\models\Autopart;
use yii\web\NotFoundHttpException;



class SiteController extends Controller
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['POST'],
                ],
            ],
        ]);
    }


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('index', compact('model', 'message'));
    }


    public function actionOurServices()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('ourServices', compact('model', 'message'));
    }


    public function actionLaw()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('law', compact('model', 'message'));
    }


    public function actionOurPartners()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('ourPartners', compact('model', 'message'));
    }


    public function actionBeforeAfter()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('beforeAfter', compact('model', 'message'));
    }


    public function actionOurPossibilities()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('ourPossibilities', compact('model', 'message'));
    }


//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }


//    public function actionRegistration()
//    {
//        $model = new RegistrationForm();
//        $message = 'Вы успешно зарегистрированы';
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            Yii::$app->session->setFlash('registrationFormSubmitted');
//            Yii::$app->getSession()->setFlash('info', $message);
//
//            return $this->refresh()->redirect(['index']);
//        }
//
//        return $this->render('registration', compact('model', 'message'));
//    }




//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }


    public function actionContact()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('contact', compact('model', 'message'));
    }
}