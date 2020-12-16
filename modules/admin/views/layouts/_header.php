<?php

use yii\helpers\Html;

?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/admin/post/">Admin</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><?= Html::a('Posts', '/admin/post/', ['class' => 'btn btn-link']); ?></li>
          <li><?= Html::a('Categories', '/admin/category/', ['class' => 'btn btn-link']); ?></li>
          <li><?= Html::a('AutoParts', '/admin/autoparts/', ['class' => 'btn btn-link']); ?></li>
          <li><?= Html::a('Review', '/admin/review/', ['class' => 'btn btn-link']); ?></li>
          <li><?= Html::a('Orders', '/admin/orders/', ['class' => 'btn btn-link']); ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?= Html::a('Logout', '/admin/logout/', ['class' => 'btn btn-link pull-right']); ?></li>
      </ul>
    </div>
  </div>
</nav>
