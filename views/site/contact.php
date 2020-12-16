<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-contact contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <?php else: ?>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject')->textInput()->label('Вид работ') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 8])->label('Сообщение') ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            <?php endif; ?>
        </div>

        <div class="col-lg-6 col-xl-6 col-md-6">
            <p>108814, город Москва, поселение Сосенское,<br>
                поселок Коммунарка, Бачуринская улица,<br>
                дом 317Ю, офис 5а, <a href="tel:+79267013882" class="textAddress">+7 926 701 3882</a></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72159.36227152712!2d37.290968757666185!3d55.584954912392895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b553bd00000001%3A0x2ebc8c7f52a1e330!2z0JjQvdGC0LXRgNGC0YDQsNC90YHRgdC10YDQstC40YEsINC-0YTQuNGG0LjQsNC70YzQvdGL0Lkg0LTQuNC70LXRgCBNQU4!5e0!3m2!1sen!2sru!4v1591813209576!5m2!1sen!2sru"
                    width="400" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </div>
</div>

