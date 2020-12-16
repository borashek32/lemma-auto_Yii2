<?php

$this->title = 'До и после ремонта';

use yii\helpers\Html;
use app\assets;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="site-index">
    <div class="jumbotron beforeAfter">

        <ul class="list">
            <li class="listItem">Ремонт любых грузовых авто</li>
            <li class="listItem">Выполняем в сжатые сроки</li>
            <li class="listItem">Под вашим контролем</li>
        </ul>

        <h1>До и после ремонта</h1>

        <h2 class="lead">Качество в деталях</h2>

        <?= $this->render('/includes/_contact_button', compact('model')) ?>

        <div class="phone">
            Позвоните нам:<br>
            <a href="tel:+79999999999" class="textAddress">+7 999 9999999</a>
        </div>

    </div>
</div>

<div>

    <h4>Страница в разработке...</h4>

</div>
