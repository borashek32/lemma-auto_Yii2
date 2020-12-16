<?php

$this->title = 'Наши партнеры';

use yii\helpers\Html;
use app\assets;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="site-index">

    <div class="jumbotron ourPartners">

        <ul class="list">
            <li class="listItem">Только качественные запасные части</li>
            <li class="listItem">Постоянно растущая база поставщиков</li>
            <li class="listItem">Только качественные запасные части</li>
        </ul>

        <h1>Наши партнеры</h1>

        <h2 class="lead">Качество в деталях</h2>

        <?= $this->render('/includes/_contact_button', compact('model')) ?>

        <div class="phone">
            Позвоните нам:<br>
            <a href="tel:+79999999999" class="textAddress">+7 999 9999999</a>
        </div>

    </div>

    <div class="body-content">

             <div class="row">

                 <div class="col-lg-3">
                     <div class="wrapCard">
                         <div class="card" style="width: 18rem;">
                            <img src="/img/motul.jpg" class="card-img-top partners img-fluid" alt="Motul">
                            <div class="card-body">
                                <h5 class="card-title">Автомасла</h5>
                                <a href="http://motul-ishop.ru/" class="btn btn-danger">Motul</a>
                            </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3">
                     <div class="wrapCard">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/yural.jpg" class="card-img-top partners img-fluid" alt="Yural">
                            <div class="card-body">
                                <p class="card-text">Автозапчасти</p>
                                <a href="https://favorit-parts.ru/" class="btn btn-primary">Yural</a>
                            </div>
                        </div>
                     </div>
                 </div>

                 <div class="col-lg-3">
                     <div class="wrapCard">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/autoeuro.jpg" class="card-img-top partners img-fluid" alt="AutoEuro">
                            <div class="card-body">
                                <p class="card-text">Автозапчасти</p>
                                <a href="https://shop.autoeuro.ru/" class="btn btn-info">AutoEuro</a>
                            </div>
                        </div>
                     </div>
                 </div>

                 <div class="col-lg-3">
                     <div class="wrapCard">
                         <div class="card" style="width: 18rem;">
                             <img src="/img/vianor.jpg" class="card-img-top partners img-fluid" alt="Vianor">
                             <div class="card-body">
                                 <p class="card-text">Автошины</p>
                                 <a href="https://vianor.ru" class="btn btn-danger">Vianor</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3">
                     <div class="wrapCard">
                         <div class="card" style="width: 18rem;">
                             <img src="/img/emex.jpg" class="partnersEmex img-fluid" alt="emex">
                             <div class="card-body">
                                 <p class="card-text">Автозапчасти</p>
                                 <a href="https://emex.ru/" class="btn btn-warning">Emex</a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

    </div>
</div>