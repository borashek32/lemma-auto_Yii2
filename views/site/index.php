<?php

$this->title = 'Лемма-авто';

use yii\helpers\Html;
use app\assets;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<!--<div class="site-index">-->

    <div class="jumbotron promo">

        <p>108814,<br>город Москва, поселение Сосенское,<br>
            поселок Коммунарка, Бачуринская улица,<br>
            дом 317Ю, офис 5а</p>

        <h1>Лемма Авто</h1>

        <h2 class="lead">Качество в деталях</h2>

        <?= $this->render('/includes/_contact_button', compact('model')) ?>

        <div class="phone">
            Позвоните нам:<br>
            <a href="tel:+79999999999" class="textAddress">+7 999 9999999</a>
        </div>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Наши возможности</h2>

                <p>Мы располагаем современным оборудованием и квалифицированными специалистами.
                    Наши мастера произведут диагностику и ремонт вашего грузового авто в кратчайшие сроки,
                    что не приведет к долгосрочному простою вашей техники.</p>

                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['site/our-possibilities']) ?>">Подробнее &raquo;</a></p>

            </div>
            <div class="col-lg-4">
                <h2>Наши услуги</h2>

                <p>Наш грузовой автосервисный центр обеспечивает все виды диагностики и
                    предоставляет возможность оперативного ремонта выявленных неисправностей. Так же мы
                    осуществляем плановое техническое обслуживание грузового автотранспорта.</p>

                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['site/our-services']) ?>">Подробнее &raquo;</a></p>

            </div>
            <div class="col-lg-4">
                <h2>Магазин автозапчастей</h2>

                <p>Мы предоставляем возможность найти и купить запасные части по
                    оптимальной цене. Мы сотрудничаем с надежными магазинами автозапчастей,
                    а так же постоянно работаем над наполнением базы поставщиков.</p>

                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['site/auto-parts']) ?>">Подробнее &raquo;</a></p>
            </div>
        </div>

    </div>
<!--</div>-->