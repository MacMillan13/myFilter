<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Новинки', 'url' => ['/site/news'], 'class' => ' btn btn-default'],
        ['label' => 'Рекомендуем', 'url' => ['/site/recommend'], 'id'=>'sdsdsd'],
        ['label' => 'Хит продаж', 'url' => ['/site/hit']],
        ['label' => 'Акции', 'url' => ['/site/shares']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= $content ?>
    </div>

</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
