<?php

$this->title = 'Отзывы клиентов';

use yii\helpers\Html;
use app\assets;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\data\Pagination;

?>
<div class="site-index">
    <div class="jumbotron beforeAfter">

        <ul class="list">
            <li class="listItem">Качественно</li>
            <li class="listItem">Надеждно</li>
            <li class="listItem">Быстро</li>
        </ul>

        <h1>Отзывы клиентов</h1>

        <h2 class="lead">Качество в деталях</h2>

        <?= $this->render('/includes/_contact_button', compact('model')) ?>

        <div class="phone">
            Позвоните нам:<br>
            <a href="tel:+79999999999" class="textAddress">+7 999 9999999</a>
        </div>

    </div>
</div>

<div>
    <h4>Оставьте свой отзыв здесь</h4>
    <div class="spaceReview">
        <?= Html::a('Написать отзыв', ['create'], ['class' => 'btn btn-primary']) ?>
    </div>


    <div class="row">
        <?php foreach ($reviews as $review): ?>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="note">

                    <h4><span><?= Yii::$app->formatter->asDate($review->date) ?></span></h4>

                    <?= Html::tag('p', Html::encode($review->name), ['class' => 'footerText']) ?>

                    <?= Html::tag('p', Html::encode($review->review), ['class' => 'footerText']) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


<nav aria-label="...">
    <?= \yii\widgets\LinkPager::widget([
        'pagination' => $pages
    ])?>
</nav>