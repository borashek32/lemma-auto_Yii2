<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'headerOptions'=>['class' => 'text-left', 'style' => 'width: 70px;'],
                'contentOptions'=>['class' => 'text-left'],
            ],
            'name',
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions'=>['class' => 'text-center', 'style' => 'width: 100px;'],
                'contentOptions'=>['class' => 'text-center'],
                'header' => Yii::t('app','Actions'),
                'template' => '{update}{delete}',
            ],
        ],
    ]); ?>


</div>
