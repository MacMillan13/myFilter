<?php
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 04.01.2018
 * Time: 16:06
 */

use yii\helpers\Html;

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="owl-carousel owl-theme">

    <? foreach ($products as $product) { ?>
        <div class="item imagine"><img src="<?=$product->getImage(); ?>">
            <div><?=$product->title;?></div>
            <div><?=$product->price;?>$</div>
            <div><?=$product->description;?></div>
        </div>
    <?   } ?>
</div>
