<?php


namespace app\controllers;


use app\models\Autopart;
use app\models\ContactForm;
use Yii;

class AutopartsController extends \yii\web\Controller
{
    public function actionAutoParts()
    {
        $this->layout = '@app/views/layouts/main.php';
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('autoParts', compact('model', 'message'));
    }


    public function actionAutoPartsSearch()
    {
        $searchModel = $_GET['search'];
        $query = Autopart::find()->where(['like', 'code', $searchModel]);
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $autoparts = $query->limit(10)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('autoPartsSearch', compact('autoparts','model', 'query', 'message'));
    }
}