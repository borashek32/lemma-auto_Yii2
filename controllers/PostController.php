<?php


namespace app\controllers;


use app\models\Category;
use app\models\ContactForm;
use app\models\Post;
use yii\data\Pagination;
use Yii;

class PostController extends \yii\web\Controller
{
    public function actionBlog()
    {
        $this->layout = '@app/views/layouts/main.php';
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $query = Post::find()->OrderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        $categories = Category::find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('blog', compact('posts', 'pages', 'categories', 'model', 'message'));
    }


    public function actionPostSearch()
    {
        $this->layout = '@app/views/layouts/main.php';
        $searchModel = $_GET['search'];
        $query = Post::find()->where(['like', 'text', $searchModel])->OrderBy(['id' => SORT_DESC]);
        $categories = Category::find()->all();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6]);
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('postSearch', compact( 'posts', 'pages', 'categories', 'searchModel', 'model', 'message'));
    }


    public function actionCategory($id)
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $categories = Category::find()->all();
        $query = Post::find()->where(['category_id' => $id])->OrderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('category', compact('posts', 'pages', 'categories', 'model', 'message'));
    }


    public function actionPost($id)
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $categories = Category::find()->all();
        $post = Post::findOne(['id' => $id]);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('post', ['post' => $post, 'categories' => $categories, 'model' => $model, 'message' => $message]);
    }

}