<?php

use yii\helpers\Html;
use app\assets;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>


<p><button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal"
           data-whatever="@mdo">Отправить заявку</button></p>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 650px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Отправьте заявку</h4>
            </div>

            <div style="font-size: 14px">

                <div class="modal-body">

                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <?php else: ?>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput()->label('Имя') ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject')->textInput()->label('Вид работ') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 2])->label('Сообщение') ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    <?php endif; ?>

                </div>

            </div>

            <canvas id="myCanvas" height="200" width="800"></canvas>
        </div>
    </div>
</div>


