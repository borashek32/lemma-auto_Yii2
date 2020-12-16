<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Autopart */

$this->title = 'Update Autopart: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Autoparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="autopart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
