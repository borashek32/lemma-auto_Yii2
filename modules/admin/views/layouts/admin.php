<?php

use app\assets\AdminAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

AdminAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Admin Lemma Auto<?= Html::encode($this->title) ?></title>
    <meta name='author' content='NatZueva'>
    <?php $this->head() ?>
</head>

<body>

<?php $this->beginBody() ?>

    <div class="container">

        <?= $this->render('_header') ?>

        <?= $content ?>

    </div>

<?php $this->endBody() ?>


</body>
</html>


<?php $this->endPage() ?>