<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

    <script type="text/javascript">
        VK.init({apiId: 7574113, onlyWidgets: true});
    </script>
</head>
<body>
<?php $this->beginBody() ?>

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
            ['label' => 'Наши услуги', 'url' => ['/site/our-services']],
            ['label' => 'Автозапчасти', 'url' => ['/autoparts/auto-parts']],
            ['label' => 'До и после', 'url' => ['/site/before-after']],
            ['label' => 'Отзывы', 'url' => ['/review/']],
            ['label' => 'Автожурнал', 'url' => ['/post/blog']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Регистрация', 'url' => ['/user/signup']],


            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/user/default/login/']]
            ) : (
                '<li>'
                . Html::beginForm(['/user/user/index'], 'post')
                . Html::submitButton(
                    'Личный кабинет (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= $content ?>

        <div class="alert">
            <?= Alert::widget() ?>
        </div>

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
