<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['post-search'],
        'method' => 'get',
    ]); ?>


    <input type="text" placeholder="" name="search" class="searchPostField">


    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>