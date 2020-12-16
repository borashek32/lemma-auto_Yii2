<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Autopart */

$this->title = 'Create Autopart';
$this->params['breadcrumbs'][] = ['label' => 'Autoparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autopart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
