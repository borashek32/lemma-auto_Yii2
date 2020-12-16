<?php

$this->title = 'Автожурнал';
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Html;
use app\assets;
use yii\Models\Category;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\data\Pagination;

?>

<div class="jumbotron blog">

    <p>108814,<br>город Москва, поселение Сосенское,<br>
        поселок Коммунарка, Бачуринская улица,<br>
        дом 317Ю, офис 5а</p>

    <h1>Автожурнал</h1>

    <h2 class="lead">Качество в деталях</h2>

    <?= $this->render('/includes/_contact_button', compact('model')) ?>

    <div class="phone">
        Позвоните нам:<br>
        <a href="tel:+79999999999" class="textAddress">+7 999 9999999</a>
    </div>

    <div class="searchTop">

        <?= $this->render('/includes/_search_post') ?>
    </div>
</div>

<div class="body-content">
    <div class="rowBlog">
        <div class="leftPart">
            <div class="categoryMenu">
                <?= $this->render('/includes/_menu_left', compact('categories', 'model'), [ 'class' => 'menuLeft' ]) ?>

            </div>
            <div class="menuLeftButton">
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src=".././img/menu.png" alt="Меню" width="20">
                    </button>
                    <div class="dropdown-menu">
                        <div class="menuLeftLines">

                            <?= $this->render('/includes/_menu_left', compact('categories', 'model'), [ 'class' => 'menuLeft' ]) ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="search">
                <?= $this->render('/includes/_search_post') ?>
            </div>
        </div>
        <div class="middlePart">
            <h3><?php echo "Вы искали: " . $_GET['search']?></h3>
            <div class="pull-left">
                <div class="row">

                    <?php foreach ($posts as $post): ?>

                        <div class="col-xl-4 col-lg-4 col-md-4">

                            <div class="note">

                                <div class="titleNote">

                                    <h4><a href="<?= \yii\helpers\Url::to(['/post/post', 'id' => $post->id]) ?>"><?= $post->title ?></a></h4>

                                    <?= \yii\helpers\Html::img( ($post->img), ['class' => 'imgPost'] ) ?>

                                </div>

                                <h4><span><?= Yii::$app->formatter->asDate($post->date) ?></span></h4>

                                <h5>Категория: <a href="<?= \yii\helpers\Url::to(['/post/category', 'id' => $post->category_id]) ?>">
                                        <?= $post->category->name ?></a></h5>

                                <?= Html::tag('p', Html::encode($post->quote), ['class' => 'footerText']) ?>

                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <nav aria-label="...">
                <?= \yii\widgets\LinkPager::widget([
                    'pagination' => $pages
                ])?>
            </nav>
        </div>
    </div>
</div>
