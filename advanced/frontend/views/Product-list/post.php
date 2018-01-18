<?php
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 15.01.2018
 * Time: 18:35
 */
use yii\helpers\Html;
?>
<div class="post">

    <div class="col-xs-4 mode">

    <div class="img-view imagine"><img src="<?= Html::encode($model->getImage()); ?>"></div>

    <h2 class="h2-height"><?= Html::encode($model->title); ?></h2>

    <p><?= Html::encode($model->description); ?></p>

    <h3> Цена: <?= Html::encode($model->price); ?>$</h3>
    <? if ($model->discount) {?>
        <div>Скидка: <?=$model->discount;?> %</div>
    <? } ?>

</div>
</div>