<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['auto-parts-search'],
        'method' => 'get',
    ]); ?>


    <input type="text" placeholder="Поиск по каталожному номеру" name="search" class="searchAutopartsField"><br>


    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>