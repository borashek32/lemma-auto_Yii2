<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;
use yii\bootstrap\Nav;

AppAsset::register($this);

?>


<?php $this->beginPage() ?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name='author' content='NatZueva'>
    <?php $this->head() ?>
</head>

<body>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Личный кабинет', 'url' => ['/user/user/index/']],
            ['label' => 'Мои заказы', 'url' => ['/user/user/order/']],
            ['label' => 'Информация', 'url' => ['/user/user/info/']],

            Yii::$app->user->isGuest ? (
            ['label' => 'Вход', 'url' => ['/user/default/index/']]
            ) : (
                '<li>'
                . Html::beginForm(['/user/default/logout/'], 'post')
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="padding-top: 50px;">

        <?= $content ?>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-6">
            <div class="pull-left">
                <img src="../img/logoWhite.png">
                <p class="textFooter"><a href="http://digitalcoffeedesign.com">&copy; Digital coffee design</a><br>
                    <?= date('Y') ?></p>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-6">
            <div class="pull-right">
                <img src="../img/icon.png" width="30">
                <p class="textFooter">&copy; Lemma Auto<br>
                    <a href="tel:+79267013882" class="textAddress">+7 926 701 3882</a></p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
