<?php

$this->title = 'Автожурнал';
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Html;
use app\assets;
use yii\Models\Category;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="jumbotron blog">

    <p>108814,<br>город Москва, поселение Сосенское,<br>
        поселок Коммунарка, Бачуринская улица,<br>
        дом 317Ю, офис 5а</p>

    <h1>Lemma Auto</h1>

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
                    <button type="button" class="btn btn-sdark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <div class="note">
                <div class="titleNote">
                    <h3><a href="<?= \yii\helpers\Url::to(['post/post', 'id' => $post->id]) ?>"><?= $post->title ?></a></h3>

                    <?= \yii\helpers\Html::img( ($post->img), ['class' => 'imgPostBlog']) ?>

                </div>

                <h4><span><?= Yii::$app->formatter->asDate($post->date) ?></span></h4>

                <h4>Категория: <a href="<?= \yii\helpers\Url::to(['post/category', 'id' => $post->category_id]) ?>"><?= $post->category->name ?></a></h4>

                <?= Html::tag('p', Html::encode($post->text), ['class' => 'footerText']) ?>

                <!-- Put this div tag to the place, where the Comments block will be -->
                <div id="vk_comments"></div>
                <script type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
                </script>
            </div>
        </div>
    </div>
</div>
