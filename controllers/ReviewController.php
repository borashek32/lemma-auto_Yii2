<?php


namespace app\controllers;


use app\models\ContactForm;
use app\models\Review;
use yii\data\Pagination;
use Yii;
use yii\captcha\Captcha;

class ReviewController extends \yii\web\Controller
{
    public function actionReview()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $q = Review::find()->OrderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $q->count(), 'pageSize' => 6]);
        $reviews = $q->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('review', compact('reviews', 'pages', 'model', 'message'));
    }


    public function actionCreate()
    {
        $model = new Review();
        $message = 'Спасибо за ваш отзыв';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('reviewSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->redirect(['review', 'id' => $model->id]);
        }

        return $this->render('create', compact('model', 'message'));
    }
}