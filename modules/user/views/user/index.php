<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Личный кабинет';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-2">
            <h2>
                <a href="<?= \yii\helpers\Url::to('/auto-parts/') ?>"
                   class="btn btn-success">Магазин автозапчастей
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </h2>
        </div>

        <div class="col-lg-2">
            <h2>
                <a href="<?= \yii\helpers\Url::to('/user/user/order/') ?>"
                   class="btn btn-success">Мои заказы
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </h2>
        </div>
    </div>

    <p style="margin-top: 30px;">
        У нас вы можете выбрать и заказать запасные части на грузовой автотрнспорт.<br>
        Для вашего удобства заполните контактрую форму внизу:
    </p>

    <p style="margin-top: 30px;">
        На странице заказов вы можете проверить статус заказа
    </p>
</div>
