<?php

use \yii\helpers\Html;
use yii\Models\Category;

?>

<ul>

    <?php foreach ($categories as $category): ?>

        <p class="menuLeft"><?= Html::a($category->name, ['/post/category/', 'id' => $category->id]) ?></a></p>

    <?php endforeach; ?>

</ul>