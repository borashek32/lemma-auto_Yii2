<?php

$this->title = 'Автозапчасти';

use yii\helpers\Html;
use app\assets;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="site-index">
    <div class="jumbotron autoParts">

        <ul class="list">
            <li class="listItem">Помогаем в подборе</li>
            <li class="listItem">Доставляем в сжатые сроки</li>
            <li class="listItem">Запчасти на любые грузовые авто</li>
        </ul>

        <h1>Магазин автозапчастей</h1>

        <h2 class="lead">Качество в деталях</h2>

        <?= $this->render('/includes/_contact_button', compact('model')) ?>

        <div class="phone">
            Позвоните нам:<br>
            <a href="tel:+79999999999" class="textAddress">+7 999 9999999</a>
        </div>

    </div>
    <div class="body-content">

        <h3><?php echo "Вы искали: " . $_GET['search']?></h3>

        <div class="row">

        <?php foreach ($autoparts as $autopart): ?>

            <div class="col-xl-4 col-lg-4 col-md-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Каталожный номер:
                        <?= Html::tag('p', Html::encode($autopart->code), ['class' => 'footerText']) ?>
                    </li>
                    <li class="list-group-item">Наименование:
                        <?= Html::tag('p', Html::encode($autopart->name), ['class' => 'footerText']) ?>
                    </li>
                    <li class="list-group-item">Цена:
                        <?= Html::tag('p', Html::encode($autopart->price), ['class' => 'footerText']) ?>
                    </li>
                    <li class="list-group-item">Время доставки:
                        <?= Html::tag('p', Html::encode($autopart->delivery_time), ['class' => 'footerText']) ?>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <p class="quantity">Количество:</p>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <input type="text" placeholder="шт." name="quantity" class="quantityOrder"><br>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <a href="<?php \yii\helpers\Url::to(['site/add', 'id' => $autopart->id]) ?>" class="btn btn-success">В корзину</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        </div>
    </div>
</div>






